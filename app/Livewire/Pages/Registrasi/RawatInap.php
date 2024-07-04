<?php

namespace App\Livewire\Pages\Registrasi;

use Livewire\Component;
use App\Models\His\TrxIcd;
use Livewire\Attributes\On;
use App\Models\His\TrxKamar;
use App\Models\His\TrxKelas;
use App\Models\His\TrxQueue;
use App\Models\His\TrxRuang;
use Livewire\WithPagination;
use App\Models\His\TrxJadwal;
use App\Models\His\TrxPasien;
use App\Models\His\TrxMedical;
use App\Livewire\Pages\Pasien\ListPasien;


class RawatInap extends Component
{

    use WithPagination;

    public $pasien, $diagnosa, $alasan, $jenisPasien, $kelas, $ruang;
    public $form = [
        "pasien_cd" => null,
        "medical_cd" => null,
        "dr_cd" => null,
        "datetime_in" => null,
        "medical_tp" => 'MEDICAL_TP_01',
        "medical_trx_st" => 'MEDICAL_TRX_ST_0',
        "medunit_cd" => null,
        "queue_no" => null,
        "pasien_tp" => null,
        'jadwal_seqno' => null,
        "visit_tp" => 'VISIT_TP_00',
    ];

    public $medicalRecord = [
        // "pasien_cd" => null,
        "icd_cd" => null,
        "datetime_record" => null,
        "rm_tp" => "RM_TP_3",
        "medical_note" => null,
        "dr_cd" => null,
    ];
    public $searchRm, $searchPasien, $searchAlamat, $searchTanggal;

    public function mount($id = '')
    {
        $this->alasan = get_code('VISIT_TP');
        $this->jenisPasien = get_code('PASIEN_TP');
        $this->kelas = TrxKelas::all()->toArray();
        $this->ruang = TrxKamar::all()->toArray();
        if ($id != "") {
            $this->pilihOrang($id);
        }
    }


    #[On('pilih-orang')]
    public function pilihOrang($id = "")
    {

        $this->pasien = TrxPasien::findorfail($id);
        $this->form['pasien_tp'] = $this->pasien->pasien_tp;
        $this->form['pasien_cd'] = $this->pasien->pasien_cd;

    }

    #[On('pilih-diagnosa')]
    public function pilihDiagnosa($id = "")
    {

        $this->diagnosa = TrxIcd::find($id);
    }

    public function pilih($id)
    {
        if (!$this->pasien) {
            $this->js("Swal.fire(
                'Oops!',
                'Mohon Pilih Pasien terlebih dahulu!',
                'error'
              )");

            return;
        }

        // masukkan unsur poli
        $jadwal = TrxJadwal::find($id);
        $this->form['dr_cd'] = $jadwal->dr_cd;
        $this->form['medunit_cd'] = $jadwal->medunit_cd;

        $ceking = TrxMedical::where('medunit_cd', $jadwal->medunit_cd)
            ->where('pasien_cd', $this->pasien->pasien_cd)
            ->where('medical_trx_st', 'MEDICAL_TRX_ST_0');

        // cek pendaftaran poli sama
        if (
            $ceking->whereDate('datetime_in', date('Y-m-d'))->where('medical_tp', 'MEDICAL_TP_01')
                ->where('jadwal_seqno', $id)->first()
        ) {

            $this->js("Swal.fire(
                    'Oops!',
                    'Pasien sudah terdaftar di poli yang sama!',
                    'error'
                  )");
            return;
        }
        // cek sudah terdaftar di rawat inap

        if ($ceking->where('medical_tp', 'MEDICAL_TP_02')->first()) {
            $this->js("Swal.fire(
                'Oops!',
                'Pasien sudah terdaftar di rawat inap',
                'error'
              )");
            return;
        }

        $this->form['jadwal_seqno'] = $id;

        $this->js("
        Swal.fire({
            title: 'Anda yakin akan mendaftarkan pasien?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Iya',
            denyButtonText: `Tidak`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
               " . ' $wire.save()' . "
            //   Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
              Swal.fire('Changes are not saved', '', 'info')
            }
          })
        ");
    }

    public function generateAntrian()
    {
        // generate no amtrian
        $noTertinggi = 0;
        //cek keberadaan apointment
        $maxappointment = TrxQueue::where('jadwal_seqno', $this->form['jadwal_seqno'])
            ->whereDate('datetime_trx', date('Y-m-d'))->orderBy("seq_no", 'desc')
            ->first();
        if ($maxappointment) {
            $noTertinggi = $maxappointment->queue_no;
        }
        //cek yang di medical
        $maxappointment = TrxMedical::where('jadwal_seqno', $this->form['jadwal_seqno'])
            ->whereDate('datetime_in', date('Y-m-d'))->orderBy("created_at", 'desc')
            ->first();
        if ($maxappointment) {
            if ($noTertinggi < $maxappointment->queue_no) {
                $noTertinggi = $maxappointment->queue_no;
            }
        }
        $noTertinggi = $noTertinggi + 1;

        return $noTertinggi;

    }

    public function save()
    {
        $this->form['medical_cd'] = gen_medical_cd();
        $this->form['queue_no'] = $this->generateAntrian();
        $this->form['datetime_in'] = now();
        $rm = TrxMedical::create(
            $this->form
        );

        if ($this->medicalRecord['icd_cd'] != "") {
            $rm->medicalRecord()->create($this->medicalRecord);
        }

        $this->js('window.open("' . route('helper.print-antrian-poli', 1) . '", "Print Antrian Poli", "width=200,height=100");');
        session()->flash('status', 'Post successfully updated.');

        $this->js("
            Swal.fire({
                title: 'Berhasil?',
                text: 'Pendaftaran berhasil',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Kembali Ke list pasien?'
            }).then((result) => {
                if (result.isConfirmed) {
                    " . '$wire.kembalii()' . "
                }
            })
            ");
        // $this->redirect(route('pasien.index'));
    }

    public function kembalii()
    {
        $this->redirect(ListPasien::class);
    }


    public function render()
    {
        $data = TrxRuang::with(['bangsal', 'kamar', 'kelas'])->orderBy('kelas_cd', 'asc')->get();

        return view('livewire.pages.registrasi.rawat-inap', [
            'posts' => $data
        ]);
    }
}
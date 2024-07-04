<?php

namespace App\Livewire\Demo\Admin;

use App\Models\Nilai;
use Carbon\Carbon;
use App\Models\Mcu;
use Livewire\Component;
use App\Models\Wawancara1;
use App\Jobs\kirimWhatsapp;
use App\Models\Demo\Lamaran;
use Livewire\WithPagination;
use App\Models\Wawancarauser;

class Pendidikan extends Component
{
    use WithPagination;
    public $cari;

    public $persetujuan;
    public $info;

    public $pilih;
    public $keterangan;
    public $lokasi;
    public $tanggalmulai;
    public $tanggalselesai;
    public $showModal = false;
    public $showModal2 = false;
    public $pilihHasil;
    public $hasil;
    public $penilaian = [
        'pendidikan_id' => null,
        'bulan' => null,
        'tahun' => null,
        'nilai' => null,
        'kehadiran' => null,
        'catatan' => null,
    ];

    public function proses($id)
    {
        $this->pilih = $id;
        $this->info = Lamaran::find($id);

        $this->js(<<<'JS'
        document.body.scrollTop = document.documentElement.scrollTop = 0;
        JS);
    }

    public function clear()
    {
        $this->pilih = null;
        $this->persetujuan = null;

    }

    public function simpan()
    {
        $this->js(<<<'JS'

                Swal.fire({
                title: 'Anda yakin akan memproses dokumen ini?',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'Iya',
                denyButtonText: `Tidak`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                $wire.save()
                //   Swal.fire('Saved!', '', 'success')
                } else if (result.isDenied) {
                Swal.fire('Proses dibatalkan', '', 'info')
                }})

            JS);


    }

    public function save()
    {

        if ($this->persetujuan) {
            // naikan ke periode selanjutnya
            $this->validate([
                'lokasi' => 'required',
                'tanggalmulai' => 'required',
                'tanggalselesai' => 'required',
            ]);

            $data = Lamaran::find($this->pilih);
            $data->tahapan_id = $data->tahapan_id + 1;
            $data->save();
            // simpan waktu dan lokasi wawancara

            Wawancarauser::create([
                'lamaran_id' => $this->pilih,
                'lokasi' => $this->lokasi,
                'tanggal_mulai' => $this->tanggalmulai,
                'tanggal_selesai' => $this->tanggalselesai,
            ]);

            $pesan = $data->user->name . ' *lolos* ke tahap Wawancara User, harap hadir :' . "\n\n" .
                'Lokasi: ' . $this->lokasi . "\n" .
                'Tgl Mulai : ' . Carbon::parse($this->tanggalmulai)->isoFormat('LLLL') . "\n" .
                'Tgl Selesai : ' . Carbon::parse($this->tanggalselesai)->isoFormat('LLLL') . "\n\n" .
                'Terima Kasih.';

            kirimWhatsapp::dispatch($pesan, $data->user->telepon);

        } else {
            $data = Lamaran::find($this->pilih);

            $this->validate([
                'keterangan' => 'required',
            ]);
            Lamaran::find($this->pilih)->update([
                'status' => 'Dibatalkan',
                'keterangan' => $this->keterangan
            ]);

            $pesan = $data->user->name . ' *tidak lolos* ke tahap Wawancara User' . "\n\n" .
                '(' . $this->keterangan . ')';
            kirimWhatsapp::dispatch($pesan, $data->user->telepon);

        }

        $this->clear();

        $this->js(<<<'JS'
                Swal.fire('Data berhasil di proses', '', 'info')
        JS);

    }

    public function beriNilai($id)
    {
        $this->tampilModal();
        $this->pilihHasil = $id;
    }

    public function lihatNilai($id)
    {
        $this->tampilModal2();
        $this->pilihHasil = $id;
        $this->hasil = Nilai::where('pendidikan_id', $id)->get();
    }
    public function tampilModal()
    {
        $this->showModal = !$this->showModal;
    }

    public function tampilModal2()
    {
        $this->showModal2 = !$this->showModal2;
    }

    public function saveHasil($id)
    {
        $this->validate([
            'penilaian.bulan' => 'required',
            'penilaian.tahun' => 'required',
            'penilaian.nilai' => 'required',
            'penilaian.kehadiran' => 'required',
            'penilaian.catatan' => 'required',
        ]);

        $this->penilaian['pendidikan_id'] = $id;
        Nilai::create($this->penilaian);
        $this->clear();

        $this->js(<<<'JS'
                Swal.fire('Nilai berhasil di simpan', '', 'info')
        JS);

        $this->showModal = !$this->showModal;
    }

    public function render()
    {
        $data = Lamaran::with(['tahapan', 'user', 'pendidikan'])->where('tahapan_id', 4)
            ->where('status', 'Dalam Proses')
            ->paginate(10);
        return view('livewire.demo.admin.pendidikan', [
            'posts' => $data
        ]);
    }
}

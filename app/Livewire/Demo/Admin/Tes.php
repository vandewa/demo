<?php

namespace App\Livewire\Demo\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\TestFisik;
use App\Models\Demo\Kelas;
use App\Models\Wawancara1;
use App\Jobs\kirimWhatsapp;
use App\Models\Demo\Lamaran;
use Livewire\WithPagination;


class Tes extends Component
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
    public $pilihkelas;
    public $pilihHasil;
    public $push_up;
    public $sit_up;
    public $pull_up;
    public $lari;
    public $showModal = false;
    // public $listKelas;

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

    public function ambilKelas($id)
    {
        $this->pilihkelas = $id;

    }

    public function save()
    {
        if (!$this->pilihkelas) {

            $this->js(<<<'JS'

                        Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Harap memilih kelas terlebih dahulu!",

                        });

            JS);

            return;
        }

        if ($this->persetujuan) {
            // naikan ke periode selanjutnya
            $this->validate([
                'lokasi' => 'required',
                'tanggalmulai' => 'required',
                'tanggalselesai' => 'required',
            ]);

            $data = Lamaran::find($this->pilih);
            $data->tahapan_id = $data->tahapan_id + 1;
            $data->kelas_id = $this->pilihkelas;
            $data->save();
            // simpan waktu dan lokasi wawancara

            Wawancara1::create([
                'lamaran_id' => $this->pilih,
                'lokasi' => $this->lokasi,
                'tanggal_mulai' => $this->tanggalmulai,
                'tanggal_selesai' => $this->tanggalselesai,
            ]);

            $pesan = $data->user->name . ' *lolos* ke tahap Wawancara Pra Pelatihan, harap hadir :' . "\n\n" .
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

            $pesan = $data->user->name . ' *tidak lolos* ke tahap Wawancara Pra Pelatihan' . "\n\n" .
                '(' . $this->keterangan . ')';
            kirimWhatsapp::dispatch($pesan, $data->user->telepon);


        }

        $this->clear();

        $this->js(<<<'JS'
                Swal.fire('Data berhasil di proses', '', 'info')
        JS);

    }

    public function saveHasil($id)
    {
        $this->js(<<<'JS'
            var myModalEl = document.getElementById('modal-default');
            var modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        JS);
        TestFisik::find($id)->update([
            'push_up' => $this->push_up,
            'sit_up' => $this->sit_up,
            'pull_up' => $this->pull_up,
            'lari' => $this->lari,
        ]);
        $this->tampilModal();
    }

    public function ambilPilihHasil($id)
    {

        $this->pilihHasil = $id;
        $a = TestFisik::find($id);
        // dd($a);
        $this->push_up = $a->push_up;
        $this->sit_up = $a->sit_up;
        $this->pull_up = $a->pull_up;
        $this->lari = $a->lari;
        $this->tampilModal();


    }

    public function tampilModal()
    {
        $this->showModal = !$this->showModal;
    }

    public function render()
    {
        $listKelas = Kelas::where('layanan_id', $this->info->layanan_id ?? "0")->get();
        $data = Lamaran::with(['tahapan', 'user', 'tes'])->where('tahapan_id', 2)
            ->where('status', 'Dalam Proses')
            ->paginate(10);
        return view('livewire.demo.admin.tes', [
            'posts' => $data,
            'listKelas' => $listKelas
        ]);
    }
}

<?php

namespace App\Livewire\Demo\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\TestFisik;
use App\Jobs\kirimWhatsapp;
use App\Models\Demo\Lamaran;
use Livewire\WithPagination;

class SeleksiBerkas extends Component
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
            // simpan waktu dan lokasi psikotest

            TestFisik::create([
                'lamaran_id' => $this->pilih,
                'lokasi' => $this->lokasi,
                'tanggal_mulai' => $this->tanggalmulai,
                'tanggal_selesai' => $this->tanggalselesai,
            ]);

            $pesan = $data->user->name . ' *lolos* ke tahap Test Fisik & Psikotest, dengan membawa seluruh dokumen asli dan fotokopinya, harap hadir :' . "\n\n" .
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

            $pesan = $data->user->name . ' *tidak lolos* ke tahap Test Fisik & Psikotest' . "\n\n" .
                '(' . $this->keterangan . ')';

            kirimWhatsapp::dispatch($pesan, $data->user->telepon);

        }

        $this->clear();

        $this->js(<<<'JS'
                Swal.fire('Data berhasil di proses', '', 'info')
        JS);

    }
    public function render()
    {
        $data = Lamaran::with(['tahapan', 'user'])->where('tahapan_id', 1)
            ->where('status', 'Dalam Proses')
            ->paginate(10);
        return view('livewire.demo.admin.seleksi-berkas', [
            'posts' => $data
        ]);
    }
}

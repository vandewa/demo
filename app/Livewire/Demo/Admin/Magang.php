<?php

namespace App\Livewire\Demo\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Demo\Lamaran;
use App\Models\Mcu;
use App\Models\Wawancara1;
use App\Models\Wawancarauser;
use App\Models\Keberangkatan as Berangkat;
use App\Models\Magang as ModelsMagang;

class Magang extends Component
{
    use WithPagination;
    public $cari;

    public $persetujuan;
    public $info;

    public $pilih;
    public $keterangan;
    public $lokasi;
    public $tanggal_mulai;
    public $tanggal_selesai;
    public $telepon_perusahaan;
    public $alamat;
    public $notiket;

    public function proses($id) {
        $this->pilih = $id;
        $this->info = Lamaran::find($id);
        $user = ModelsMagang::firstOrCreate(
            ['lamaran_id' => $id],
        );

        $this->lokasi = $user->lokasi;
        $this->tanggal_mulai = $user->tanggal_mulai;
        $this->tanggal_selesai = $user->tanggal_selesai;
        $this->telepon_perusahaan = $user->telepon_perusahaan;
        $this->alamat = $user->alamat;

        $this->js(<<<'JS'
        document.body.scrollTop = document.documentElement.scrollTop = 0;
        JS);
    }

    public function clear() {
        $this->pilih = null;
        $this->persetujuan = null;

    }

    public function simpan() {



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


            // naikan ke periode selanjutnya
            $this->validate([
                'lokasi' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_selesai' => 'required',
            ]);

            $user = ModelsMagang::where('lamaran_id', $this->pilih)->update(
                    [
                        'lokasi' => $this->lokasi,
                        'tanggal_mulai' => $this->tanggal_mulai,
                        'tanggal_selesai' => $this->tanggal_selesai,
                        'alamat' => $this->alamat,
                        'telepon_perusahaan' => $this->telepon_perusahaan,
                    ]
            );



        $this->clear();

        $this->js(<<<'JS'
                Swal.fire('Data berhasil di proses', '', 'info')
        JS);

    }
    public function render()
    {
        $data = Lamaran::with(['tahapan', 'user', 'magang'])->where('tahapan_id',9)
        ->where('status', 'Selesai')
        ->paginate(10);
        return view('livewire.demo.admin.magang', [
            'posts' => $data
        ]);
    }
}

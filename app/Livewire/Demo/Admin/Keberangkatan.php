<?php

namespace App\Livewire\Demo\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Demo\Lamaran;
use App\Models\Mcu;
use App\Models\Wawancara1;
use App\Models\Wawancarauser;
use App\Models\Keberangkatan as Berangkat;

class Keberangkatan extends Component
{
    use WithPagination;
    public $cari;

    public $persetujuan;
    public $info;

    public $pilih;
    public $keterangan;
    public $lokasi;
    public $tanggal;
    public $notiket;

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
                'tanggal' => 'required',
                'tanggal' => 'required',
            ]);

            $data = Lamaran::find($this->pilih);
            $data->tahapan_id = $data->tahapan_id + 1;
            $data->save();
            // simpan waktu dan lokasi wawancara

            Berangkat::create([
                'lamaran_id' => $this->pilih,
                'lokasi' => $this->lokasi,
                'tanggal_keberangkatan' => $this->tanggal,
                'no_tiket' => $this->tanggal,
            ]);
            Lamaran::find($this->pilih)->update([
                'status' => 'Selesai',
                'keterangan' => ''
            ]);

        } else {
            $this->validate([
                'keterangan' => 'required',
            ]);
            Lamaran::find($this->pilih)->update([
                'status' => 'Dibatalkan',
                'keterangan' => $this->keterangan
            ]);
        }

        $this->clear();

        $this->js(<<<'JS'
                Swal.fire('Data berhasil di proses', '', 'info')
        JS);

    }
    public function render()
    {
        $data = Lamaran::with(['tahapan', 'user', 'pendidikan'])->where('tahapan_id', 8)
            ->where('status', 'Dalam Proses')
            ->paginate(10);
        return view('livewire.demo.admin.keberangkatan', [
            'posts' => $data
        ]);
    }
}

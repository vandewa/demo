<?php

namespace App\Livewire\Demo\Admin;

use Carbon\Carbon;
use App\Models\Mcu;
use Livewire\Component;
use App\Models\Pendidikan;
use App\Models\Wawancara1;
use App\Jobs\kirimWhatsapp;
use App\Models\Demo\Lamaran;
use Livewire\WithPagination;
use App\Models\PengurusanBerkas;
use App\Models\Demo\Tagihan;

class McuPage extends Component
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

    public $dibawa;

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
            // // naikan ke periode selanjutnya
            // $this->validate([
            //     'lokasi' => 'required',
            //     'tanggalmulai' => 'required',
            //     'tanggalselesai' => 'required',
            // ]);

            $data = Lamaran::find($this->pilih);
            $data->tahapan_id = $data->tahapan_id + 1;
            $data->save();
            // simpan waktu dan lokasi

            PengurusanBerkas::create([
                'lamaran_id' => $this->pilih,
                'jenis_berkas' => 'COE',
            ]);
            PengurusanBerkas::create([
                'lamaran_id' => $this->pilih,
                'jenis_berkas' => 'VISA',
            ]);
            PengurusanBerkas::create([
                'lamaran_id' => $this->pilih,
                'jenis_berkas' => 'Tiket Pesawat',
            ]);

            // $pesan = $data->user->name . ' *lolos* ke tahap Pengurusan Berkas' . "\n" .
            //     'Untuk kepengurusan dokumen maka peserta harus menyiapkan dokumen sebagai berikut:' . "\n\n" .
            //     '• COE' . "\n" .
            //     '• VISA' . "\n" .
            //     '• Tiket' . "\n\n" .
            //     'Terima Kasih.';

            $pesan = $data->user->name . ' *lolos* ke tahap Pengurusan Berkas' . "\n" .
                'Mohon mempersiapkan berkas keberangkatan ::' . "\n\n" .
                '• COE' . "\n" .
                '• VISA' . "\n" .
                '• Tiket' . "\n\n" .
                // 'Dibawa ke :' . $this->dibawa . "\n" .
                'Lokasi: ' . $this->lokasi . "\n" .
                'Tgl Mulai : ' . Carbon::parse($this->tanggalmulai)->isoFormat('LLLL') . "\n" .
                'Tgl Selesai : ' . Carbon::parse($this->tanggalselesai)->isoFormat('LLLL') . "\n\n" .
                'Terima Kasih.';


            kirimWhatsapp::dispatch($pesan, $data->user->telepon);

            Tagihan::create([
                'lamaran_id' => $data->id,
                'tanggal_tagihan' => now(),
                'user_id' => $data->user_id,
                'layanan_id' => $data->layanan_id,
                'nama_tagihan' => "Tagihan Pelatihan  SSW",
                'status' => 'Belum Lunas',
                'jumlah' => 5000000,
                'pembayaran_tp' => 'Online',

            ]);


        } else {
            $data = Lamaran::find($this->pilih);

            $this->validate([
                'keterangan' => 'required',
            ]);
            Lamaran::find($this->pilih)->update([
                'status' => 'Dibatalkan',
                'keterangan' => $this->keterangan
            ]);

            $pesan = $data->user->name . ' *tidak lolos* ke tahap Pengurusan Berkas' . "\n\n" .
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
        $data = Lamaran::with(['tahapan', 'user', 'mcu'])->where('tahapan_id', 6)
            ->where('status', 'Dalam Proses')
            ->paginate(10);
        return view('livewire.demo.admin.mcu-page', [
            'posts' => $data
        ]);
    }
}

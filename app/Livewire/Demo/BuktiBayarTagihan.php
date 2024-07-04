<?php

namespace App\Livewire\Demo;

use Carbon\Carbon;
use Livewire\Component;
use App\Jobs\kirimWhatsapp;
use App\Models\Demo\Tagihan;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Demo\TransaksiKeuangan;
use App\Models\Demo\Kelas as DemoKelas;
use App\Models\Demo\Layanan as DemoLayanan;


class BuktiBayarTagihan extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $idHapus, $edit = false, $idnya, $listLayanan;
    public $mulai, $selesai, $lokasi;


    public $bukti_bayar ;

    public function mount($id = '')
    {
        $this->idnya = $id;


    }
// cuma di pakai oleh admin
    public function confirmBayar()
    {
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Anda yakin akan menyetujui pembayaran ini!',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.lunas()
            }
          })
        JS);
    }


    public function lunas()
    {
        $cek =  Tagihan::with(['tertagih'])->find($this->idnya);
        Tagihan::find($this->idnya)->update([
            'status' => 'Lunas'
        ]);

        $transaksiKeuangan= Tagihan::find($this->idnya);
        TransaksiKeuangan::create([
            'tanggal_transaksi' => date('Y-m-d'),
            'name' => $transaksiKeuangan->nama_tagihan,
            'pengeluaran_tp' => 'PENGELUARAN_TP_01',
            'nominal' => $transaksiKeuangan->jumlah,
            'id_ref' => $transaksiKeuangan->id,
            'model' => 'App\Models\Demo\Tagihan'
        ]);

        $pesan = "Terimakasih atas pembayaran biaya Pendidikan, mohon agar dapat melakukan proses selanjutnya yakni datang ke".  "\n\n".
        'Lokasi: '.$this->lokasi."\n".
        "Tanggal Awal: ".Carbon::createFromFormat('Y-m-d', $this->mulai)->isoFormat('D MMMM Y')."\n".
        "Tanggal Akhir: ".Carbon::createFromFormat('Y-m-d', $this->selesai)->isoFormat('D MMMM Y')."\n".
        "Dengan membawa : \n".
        "1. Pakaian Hitam (celana bahan resmi) Putih (kemeja)". "\n".
        "2. Pakaian & Sepatu Olahraga". "\n".
        "3. Buku dan Alat Tulis". "\n".
        "4. Baju Batik". "\n".
        "5. Sprei dan Sarung Bantal". "\n".
        "6. Perangkat Ibadah". "\n".
        "7. Berkas-berkas yang diperlukan seperti :". "\n".
         "KTP, Akta Lahir, MCU Awal, Ijasah"
        ;


        kirimWhatsapp::dispatch($pesan, $cek->tertagih->telepon);



        session()->flash('status', 'Pembayaran diterima');
    }



    public function confirmTolak()
    {
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Anda yakin akan menolak pembayaran ini!',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.tolak()
            }
          })
        JS);
    }

    public function tolak()
    {

       $data = Tagihan::find($this->idnya);
        Tagihan::create([
            'user_id' => $data->user_id,
            'layanan_id' => $data->layanan_id,
            'tanggal_tagihan' => $data->tanggal_tagihan,
            'nama_tagihan' => $data->nama_tagihan,
            'status' => $data->status,
            'jumlah' => $data->jumlah,
            'user_id' => $data->user_id,
            'pembayaran_tp' => $data->pembayaran_tp,
            'lamaran_id' => $data->lamaran_id,
            'ref_id' =>$this->idnya,
        ]);
       $data->update([
        'status' => 'Dibatalkan'
        ]);
        session()->flash('status', 'Pembayaran ditolak');

        // kirim wa
    }


// selesai fungsi kusus

    public function storeUpdate()
    {

        $this->validate([
            'bukti_bayar' => 'required|image'
        ]);
       $data = $this->bukti_bayar->store('bukti-bayar', 'public');
       Tagihan::find($this->idnya)->update([
            'bukti_bayar' => $data,
            'tanggal_pelunasan' => now(),
        ]);
        // $this->reset();
        // $this->edit = false;

        session()->flash('status', 'Upload Berhasil');
    }


    public function render()
    {
        $data =Tagihan::find($this->idnya);

        return view('livewire.demo.bukti-bayar-tagihan', [
            'pembayaran' => $data,
        ]);
    }
}

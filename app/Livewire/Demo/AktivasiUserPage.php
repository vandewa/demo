<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use App\Jobs\kirimWhatsapp;
use App\Models\Demo\TransaksiKeuangan;
use Livewire\WithPagination;
use App\Models\User;

class AktivasiUserPage extends Component
{
    use WithPagination;
    public $pilih;
    public $info;

    public function proses($id)
    {
        $this->pilih = $id;
        $this->info = User::find($id);

        $this->js(<<<'JS'
        document.body.scrollTop = document.documentElement.scrollTop = 0;
        JS);
    }

    public function cancel()
    {
        $this->pilih = null;
        $this->info = null;
    }

    public function save($id)
    {
        // dd($this->pilih);



        User::find($id)->update([
            'active_st' => true
        ]);

        $this->info = User::find($id);

        TransaksiKeuangan::create([
            'tanggal_transaksi' => date('Y-m-d'),
            'name' => 'Pembayaran aktivasi user ' . $this->info->name,
            'pengeluaran_tp' => 'PENGELUARAN_TP_01',
            'nominal' => 300000,
            'id_ref' => $this->info->id,
            'model' => 'App\Models\User'
        ]);
        $pesan = "Pemberitahuan, Aktivasi user anda berhasil dilakukan, silahkan login kembali dan masuk menu Lamaran";


        kirimWhatsapp::dispatch($pesan, $this->info->telepon);
        session()->flash('status', 'Pemohon berhasil diaktivasi.');

        $this->cancel();
    }

    public function tolak()
    {
        User::find($this->pilih)->update([
            'tanggal_upload' => null,
            'path_dokumen' => null
        ]);


        $pesan = "Pemberitahuan, Aktivasi user anda ditolak \n Silahkan ulangi aktivasi anda" . "\n";

        kirimWhatsapp::dispatch($pesan, $this->info->telepon);
        session()->flash('status', 'Pemohon berhasil ditolak.');
        $this->cancel();

    }
    public function render()
    {
        $data = User::where('tanggal_upload', '<>', null)->where('active_st', false)->orwhere('active_st', null)
            ->paginate(10);
        return view('livewire.demo.aktivasi-user-page', [
            'posts' => $data
        ]);
    }
}

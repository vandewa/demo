<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\Demo\Tagihan;

class LinkTransaksi extends Component
{

    public $idnya;
    public $ceklunas;

    public function mount() {
        $cek = Tagihan::where('user_id', auth()->user()->id)->where('status', 'Lunas')->first();
        if($cek){
            $this->ceklunas = true;
        }

    }
    public function render()
    {
        return view('livewire.component.link-transaksi');
    }
}

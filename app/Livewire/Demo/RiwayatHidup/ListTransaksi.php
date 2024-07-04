<?php

namespace App\Livewire\Demo\RiwayatHidup;

use Livewire\Component;
use Livewire\WithPagination;


class ListTransaksi extends Component
{
    public $idnya;

    public function render()
    {
        return view('livewire.demo.riwayat-hidup.list-transaksi');
    }
}

<?php

namespace App\Livewire\Demo\DataKeluarga;

use Livewire\Component;
use Livewire\WithPagination;


class ListTransaksi extends Component
{

    public $idnya;
    
    public function render()
    {
        return view('livewire.demo.data-keluarga.list-transaksi');
    }
}

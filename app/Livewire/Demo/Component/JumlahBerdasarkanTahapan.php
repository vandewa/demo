<?php

namespace App\Livewire\Demo\Component;

use App\Models\Demo\Tahapan;
use Livewire\Component;


class JumlahBerdasarkanTahapan extends Component
{
    public function render()
    {
        $data = Tahapan::withCount('lamaran')->get();

        // dd($data);
        return view('livewire.demo.component.jumlah-berdasarkan-tahapan', [
            'data' => $data
        ]);
    }
}

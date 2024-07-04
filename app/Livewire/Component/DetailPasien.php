<?php

namespace App\Livewire\Component;

use App\Models\His\TrxMedical;
use App\Models\His\TrxPasien;
use Livewire\Component;

class DetailPasien extends Component
{
    public $medicalcd;
    public function render()
    {
        $data = TrxMedical::with(['pasien', 'jenisRawat', 'dokter', 'poli'])->find($this->medicalcd);
        return view('livewire.component.detail-pasien', [
            'item' => $data
        ]);
    }
}

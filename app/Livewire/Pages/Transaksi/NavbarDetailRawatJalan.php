<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\His\TrxMedical;
use Livewire\Component;

class NavbarDetailRawatJalan extends Component
{
    public $pasien;
    public $medical;
    public function mount($id) {
        $this->medical = TrxMedical::with(['poli', 'dokter', 'pasien', 'jenisPasien'])->find($id);
        $this->pasien = $this->medical->pasien;
    }
    public function render()
    {
        return view('livewire.pages.transaksi.navbar-detail-rawat-jalan');
    }
}

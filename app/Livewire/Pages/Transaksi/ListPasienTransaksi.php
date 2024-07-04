<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\His\TrxDokter;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalUnit;
use App\Models\His\TrxUnitMedis;

class ListPasienTransaksi extends Component
{
    use  WithPagination;
    public $rm;
    public $poliklinik;
    public $tanggal ;
    public $poli;
    public $listDokter;
    public $dokter;
    public $url = 'transaksi.rawat-jalan.detail.rawat-jalan';

    public function mount($url = ""){
        $this->poli = TrxUnitMedis::where('medicalunit_tp', 'MEDICALUNIT_TP_1')->get()->toArray();
        $this->tanggal = date('Y-m-d');
        $this->listDokter = TrxDokter::all()->toArray();

        if($url != ""){
            $this->url = $url;
        }
    }
    public function render()
    {
        return view('livewire.pages.transaksi.list-pasien-transaksi');
    }
}

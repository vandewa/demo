<?php

namespace App\Livewire\Component;

use App\Models\His\TrxMedical;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Reactive;

class TablePasien extends Component
{
    use WithPagination;

    #[Reactive]
    public $rm;

    #[Reactive]
    public $poliklinik;

    #[Reactive]
    public $tanggal;

    #[Reactive]
    public $dokter;

    public $url;



    public function render()
    {
        $data = TrxMedical::with(['poli', 'dokter', 'pasien', 'jenisPasien'])->carirm($this->rm)
        ->caripoliklinik($this->poliklinik)
        ->caritanggal($this->tanggal)
        ->caridokter($this->dokter)
        ->orderBy('medunit_cd', 'asc')
        ->paginate(10);
        return view('livewire.component.table-pasien', [
            'posts' => $data
        ]);
    }
}

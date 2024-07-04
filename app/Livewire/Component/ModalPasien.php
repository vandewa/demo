<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\His\TrxPasien;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ModalPasien extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;

    public function pilih($id) {
        $this->dispatch('pilih-orang', $id);
        $this->showModal();
    }

    #[On('show-modal-pasien')]
    public function showModal()
    {
        $this->modal = !$this->modal;
        $this->search = null;
        $this->dispatch('autofocus', id: 'search-pasien');

    }

    public function render()
    {
        $data = TrxPasien::with(['provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'asuransi'])
        ->carikusus($this->search)
        ->orderBy('updated_at', 'desc')
        ->paginate(10);
        return view('livewire.component.modal-pasien', [
            'posts' => $data
        ]);
    }
}

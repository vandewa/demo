<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\His\TrxIcd;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ModalDiagnosa extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;

    public function pilih($id) {
        $this->dispatch('pilih-diagnosa', $id);
        $this->showModal();
    }

    #[On('show-modal-diagnosa')]
    public function showModal()
    {
        $this->modal = !$this->modal;
        $this->search = null;
        $this->dispatch('autofocus', id: 'search-diagnosa');
    }

    public function render()
    {   $data = TrxIcd::cari($this->search)->paginate(10);
        return view('livewire.component.modal-diagnosa', [
            'posts' => $data
        ]);
    }
}

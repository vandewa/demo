<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use App\Models\His\TrxIcd;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ModalPelapor extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;

    public function pilih($id)
    {
        $this->dispatch('pilih-pelapor', $id);
        $this->showModal();
    }

    #[On('show-modal-pelapor')]
    public function showModal()
    {
        $this->modal = !$this->modal;
        $this->search = null;
        $this->dispatch('autofocus', id: 'search-pelapor');
    }

    public function render()
    {
        $data = User::cari($this->search)->paginate(10);
        return view('livewire.demo.modal-pelapor', [
            'posts' => $data
        ]);
    }
}

<?php

namespace App\Livewire\Pages\Master\DataMedis;

use App\Models\His\TrxSpesialis;
use Livewire\Component;
use Livewire\WithPagination;

class Spesialis extends Component
{
    use WithPagination;

    public $form = [
        'spesialis_cd' => '',
        'spesialis_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;
    public function getEdit($a)
    {
        $this->form = TrxSpesialis::find($a)->only(['spesialis_cd', 'spesialis_nm']);
        $this->edit = true;
    }

    public function batal()
    {
        $this->edit = false;
        $this->reset();

    }

    public function save()
    {
        if ($this->edit) {
            $this->storeUpdate();
        } else {
            $this->store();
        }
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil disimpan");
        $this->reset();
    }

    public function store()
    {
        $this->validate([
            'form.spesialis_cd' => 'required',
            'form.spesialis_nm' => 'required',
        ]);

        TrxSpesialis::create($this->form);

    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        TrxSpesialis::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxSpesialis::find($this->form['spesialis_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxSpesialis::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-medis.spesialis', [
            'post' => $data
        ]);
    }
}
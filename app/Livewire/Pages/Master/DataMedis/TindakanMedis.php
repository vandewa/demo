<?php

namespace App\Livewire\Pages\Master\DataMedis;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxTindakan;

class TindakanMedis extends Component
{
    use WithPagination;

    public $form = [
        'treatment_cd' => '',
        'treatment_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;

    public function getEdit($a)
    {
        $this->form = TrxTindakan::find($a)->only(['treatment_cd', 'treatment_nm']);
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
            'form.treatment_cd' => 'required',
            'form.treatment_nm' => 'required',
        ]);

        TrxTindakan::create($this->form);
    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        TrxTindakan::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxTindakan::find($this->form['treatment_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxTindakan::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-medis.tindakan-medis', [
            'post' => $data
        ]);
    }
}
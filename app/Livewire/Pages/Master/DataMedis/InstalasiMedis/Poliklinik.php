<?php

namespace App\Livewire\Pages\Master\DataMedis\InstalasiMedis;

use App\Models\His\TrxUnitMedis;
use Livewire\Component;
use Livewire\WithPagination;

class Poliklinik extends Component
{
    use WithPagination;

    public $form = [
        'medunit_cd' => '',
        'medunit_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;
    public function getEdit($a)
    {
        $this->form = TrxUnitMedis::find($a)->only(['medunit_cd', 'medunit_nm']);
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
            'form.medunit_cd' => 'required',
            'form.medunit_nm' => 'required',
        ]);

        TrxUnitMedis::create($this->form);

    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        TrxUnitMedis::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxUnitMedis::find($this->form['medunit_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxUnitMedis::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-medis.instalasi-medis.poliklinik', [
            'post' => $data
        ]);
    }
}
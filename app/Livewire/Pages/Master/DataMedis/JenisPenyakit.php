<?php

namespace App\Livewire\Pages\Master\DataMedis;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxIcd;

class JenisPenyakit extends Component
{
    use WithPagination;
    public $form = [
        'icd_cd' => '',
        'icd_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;

    public function getEdit($a)
    {
        $this->form = TrxIcd::find($a)->only(['icd_cd', 'icd_nm']);
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
            'form.icd_cd' => 'required',
            'form.icd_nm' => 'required',
        ]);

        TrxIcd::create($this->form);
    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        TrxIcd::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxIcd::find($this->form['icd_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxIcd::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-medis.jenis-penyakit', [
            'post' => $data
        ]);
    }
}
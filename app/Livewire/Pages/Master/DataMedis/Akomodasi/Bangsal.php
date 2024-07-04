<?php

namespace App\Livewire\Pages\Master\DataMedis\Akomodasi;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxBangsal;

class Bangsal extends Component
{
    use WithPagination;

    public $form = [
        'bangsal_cd' => '',
        'bangsal_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;

    public function getEdit($a)
    {
        $this->form = TrxBangsal::find($a)->only(['bangsal_cd', 'bangsal_nm']);
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
            'form.bangsal_cd' => 'required',
            'form.bangsal_nm' => 'required',
        ]);

        TrxBangsal::create($this->form);
    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        TrxBangsal::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxBangsal::find($this->form['bangsal_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxBangsal::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-medis.akomodasi.bangsal', [
            'post' => $data
        ]);
    }
}
<?php

namespace App\Livewire\Pages\Master\DataMedis\Akomodasi;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxKelas;

class Kelas extends Component
{
    use WithPagination;

    public $form = [
        'kelas_cd' => '',
        'kelas_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;

    public function getEdit($a)
    {
        $this->form = TrxKelas::find($a)->only(['kelas_cd', 'kelas_nm']);
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
            'form.kelas_cd' => 'required',
            'form.kelas_nm' => 'required',
        ]);

        TrxKelas::create($this->form);
    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        TrxKelas::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxKelas::find($this->form['kelas_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxKelas::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-medis.akomodasi.kelas', [
            'post' => $data
        ]);
    }
}
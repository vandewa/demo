<?php

namespace App\Livewire\Demo\Master;

use App\Models\Demo\Layanan;
use Livewire\Component;
use Livewire\WithPagination;

class LayananPage extends Component
{
    use WithPagination;

    public $form = [
        'paramedis_cd' => '',
        'paramedis_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;
    public function getEdit($a)
    {
        $this->form = Layanan::find($a)->only(['paramedis_cd', 'paramedis_nm']);
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
            'form.paramedis_cd' => 'required',
            'form.paramedis_nm' => 'required',
        ]);

        Layanan::create($this->form);

    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        Layanan::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        Layanan::find($this->form['paramedis_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = Layanan::paginate(10);
        return view('livewire.demo.master.layanan-page', [
            'post' => $data
        ]);
    }
}

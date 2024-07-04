<?php

namespace App\Livewire\Pages\Master\DataMedis\Akomodasi;

use App\Models\His\TrxBangsal;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxKamar;
use App\Models\His\TrxKelas;

class Kamar extends Component
{
    use WithPagination;
    public $listKelas, $listBangsal;

    public $form = [
        'kamar_cd' => '',
        'kamar_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;

    public function mount()
    {
        $this->listKelas = TrxKelas::all()->toArray();
        $this->listBangsal = TrxBangsal::all()->toArray();
    }

    public function getEdit($a)
    {
        $this->form = TrxKamar::with(['bangsal', 'kelas'])->find($a)->only(['kamar_cd', 'kamar_nm']);
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
            'form.kamar_cd' => 'required',
            'form.kamar_nm' => 'required',
        ]);

        TrxKamar::create($this->form);
    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        TrxKamar::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxKamar::find($this->form['kamar_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxKamar::with(['bangsal', 'kelas'])->cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-medis.akomodasi.kamar', [
            'post' => $data
        ]);
    }
}
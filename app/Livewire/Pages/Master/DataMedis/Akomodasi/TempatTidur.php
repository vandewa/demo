<?php

namespace App\Livewire\Pages\Master\DataMedis\Akomodasi;

use Livewire\Component;
use App\Models\His\TrxKelas;
use App\Models\His\TrxRuang;
use Livewire\WithPagination;
use App\Models\His\TrxBangsal;
use App\Models\His\TrxKamar;

class TempatTidur extends Component
{
    use WithPagination;

    public $form = [
        'ruang_cd' => '',
        'ruang_nm' => '',
        'kelas_cd' => '',
        'bangsal_cd' => '',
        'kamar_cd' => '',
    ];
    public $cari, $edit = false;

    public $listKelas, $listBangsal, $listKamar;

    public $idHapus;

    public function mount()
    {
        $this->listKelas = TrxKelas::all()->toArray();
        $this->listBangsal = TrxBangsal::all()->toArray();
        $this->listKamar = TrxKamar::all()->toArray();
    }

    public function getEdit($a)
    {
        $this->form = TrxRuang::find($a)->only(['ruang_cd', 'ruang_nm', 'kelas_cd', 'bangsal_cd', 'kamar_cd']);
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
            'form.ruang_cd' => 'required',
            'form.ruang_nm' => 'required',
            'form.kelas_cd' => 'required',
            'form.bangsal_cd' => 'required',
            'form.kamar_cd' => 'required',
        ]);

        TrxRuang::create($this->form);
    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        TrxRuang::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxRuang::find($this->form['ruang_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxRuang::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-medis.akomodasi.tempat-tidur', [
            'post' => $data
        ]);
    }
}
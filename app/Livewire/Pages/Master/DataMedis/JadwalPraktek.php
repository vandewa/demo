<?php

namespace App\Livewire\Pages\Master\DataMedis;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxDokter;
use App\Models\His\TrxJadwal;
use App\Models\His\TrxUnitMedis;

class JadwalPraktek extends Component
{
    use WithPagination;
    public $form = [
        'dr_cd' => '',
        'medunit_cd' => '',
        'day_tp' => '',
        'time_start' => '',
        'time_end' => '',
        'note' => '',
    ];
    public $cari, $edit = false, $dokter, $poli, $hari;
    public $idHapus;


    public function mount($id = "")
    {
        $this->dokter = TrxDokter::get()->toArray();
        $this->poli = TrxUnitMedis::get()->toArray();
        $this->hari = get_code('DAY_TP');
        if ($id != "") {
            $this->edit = true;
            $this->form = TrxJadwal::find($id)->only(
                [
                    'seq_no',
                    'dr_cd',
                    'medunit_cd',
                    'day_tp',
                    'time_start',
                    'time_end',
                    'note',
                ]
            );
        }
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
            'form.dr_cd' => 'required',
            'form.medunit_cd' => 'required',
            'form.time_start' => 'required',
            'form.time_end' => 'required',
        ]);

        TrxJadwal::create($this->form);
        $this->redirect(route('master.jadwal-praktek.index'));
    }


    public function storeUpdate()
    {
        TrxJadwal::find($this->form['seq_no'])->update($this->form);
        $this->reset();
        $this->edit = false;
        $this->redirect(route('master.jadwal-praktek.index'));
    }

    public function render()
    {
        $data = TrxJadwal::with(['hari', 'poli', 'dokter'])->paginate(10);

        return view('livewire.pages.master.data-medis.jadwal-praktek', [
            'post' => $data
        ]);
    }
}
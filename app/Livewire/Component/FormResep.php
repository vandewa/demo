<?php

namespace App\Livewire\Component;

use App\Models\His\InvItemMaster;
use App\Models\His\TrxDokter;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class FormResep extends Component
{

    public $hari , $dosisdepan, $dosisbelakang;
    public $pagi = [];
    public $siang = [];
    public $sore = [];
    public $malam =[];
    public $habiskan = [];

    public $form= [
        'resep_no' => null,
        'resep_date' => null,
        'dr_cd' => null,
    ];

    public $dr_cd;

    public $jumlah;
    public $obat;
    public $dokter;

    public $obatTable;
    public $obatTableRacik = [];

    #[Computed]
    public function catatan() {
        $data = '';
        $pagi = $this->pagi[0]??"";
        $siang = $this->siang[0]??"";
        $sore = $this->sore[0]??"";
        $malam = $this->malam[0]??"";
        $habiskan = $this->habiskan[0]??"";
        if($this->dosisdepan){
            $data = $data.' '.$this->dosisdepan .' X '. $this->dosisbelakang.' ';

        }
        $data = $data.' '.$this->hari;
        $data = $data.' '.$habiskan;
        $data = $data.' '.$pagi.' '.$siang.' '.$sore.' '.$malam.' ';
        return $data;
    }

    #[On('pilih-obat')]
    public function pilihObat($id = "")
    {
        $this->obat = InvItemMaster::with(['satuan'])->findorfail($id);

        $this->js('
        setTimeout(() => {
            document.getElementById("jumlah").focus();
        }, 100);
        ');

    }

    public function mount() {
        $this->form['resep_no'] = gen_no_resep();
        $this->form['tanggal'] = date('Y-m-d');
        $this->form['dr_cd'] = $this->dr_cd;
        $this->dokter = TrxDokter::all()->toArray();
        $this->obatTable = collect([]);
    }

    public function tambah() {
        if(!$this->obat){
            $this->js("
                Swal.fire(
                'Ops!',
                'Anda harus memilih obat terlebih dahulu!',
                'error'
              )
            ");

            return ;
        }

        $this->validate([
            'jumlah' => 'required',
            'dosisbelakang' => 'required',
            'dosisdepan' => 'required',
        ]);

        $isian = [
            'item_cd'   => $this->obat->item_cd,
            'data_nm'   => $this->obat->item_nm,
            'quantity'  => $this->jumlah,
            'info_01'   => $this->catatan,
            'resep_tp'  => 'RESEP_TP_1',
        ];



        $this->obatTable->push($isian);
        // array_push($this->obatTable, $isian);
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->obat = null;
        $this->jumlah = null;
        $this->hari = null;
        $this->dosisdepan = null;
        $this->dosisbelakang = null;
        $this->pagi = [];
        $this->siang = [];
        $this->sore = [];
        $this->malam =[];
        $this->habiskan = [];

    }

    public function render()
    {
        return view('livewire.component.form-resep');
    }
}

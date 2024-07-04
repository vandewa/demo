<?php

namespace App\Livewire\Demo\Keuangan;

use Livewire\Component;
use App\Models\His\ComCode;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\Demo\Layanan as DemoLayanan;
use App\Models\Demo\TransaksiKeuangan as Uang;



class ModalKeuangan extends Component
{

    use WithPagination;
    public $search;
    public $modal = false;

    public $idHapus, $edit = false, $idnya, $listLayanan;


    public $form = [
        'tanggal_transaksi' => null,
        'name' => null,
        'pengeluaran_tp' => null,
        'nominal' => null,
    ];

    public function mount()
    {
        $this->listLayanan = DemoLayanan::all()->toArray();
        $this->form['tanggal_transaksi'] = date('Y-m-d');
    }


    #[On('show-modal-keuangan')]


    public function showModal($title = '')
    {
        $this->modal = !$this->modal;
        if ($title) {
            $this->edit = true;
            $this->idnya = $title;
            $this->form = Uang::find($this->idnya)->only(['tanggal_transaksi', 'name', 'pengeluaran_tp', 'nominal']);
        }
    }

    public function closeModal()
    {
        $this->form = [
            'tanggal_transaksi' => null,
            'name' => null,
            'pengeluaran_tp' => null,
            'nominal' => null,
        ];

        $this->edit = false;
        $this->idnya = null;
        $this->modal = !$this->modal;
    }

    public function save()
    {
        if ($this->edit) {
            $this->storeUpdate();
        } else {
            $this->store();
        }

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);

        $this->dispatch('refresh')->to(TransaksiKeuangan::class);

    }

    public function storeUpdate()
    {
        Uang::find($this->idnya)->update($this->form);
        $this->reset();
    }

    public function store()
    {
        $this->validate([
            'form.tanggal_transaksi' => 'required',
            'form.name' => 'required',
            'form.pengeluaran_tp' => 'required',
            'form.nominal' => 'required',
        ]);

        Uang::create($this->form);
        $this->modal = !$this->modal;
        $this->reset();
    }

    public function render()
    {
        $jenis = ComCode::where('code_group', 'PENGELUARAN_TP')->get();

        return view('livewire.demo.keuangan.modal-keuangan', [
            'jenis' => $jenis,
        ]);
    }
}

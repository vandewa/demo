<?php

namespace App\Livewire\Demo;

use App\Models\Demo\Kelas as DemoKelas;
use App\Models\Demo\Layanan as DemoLayanan;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Demo\Tagihan;


class ListTagihan extends Component
{
    use WithPagination;

    public $idHapus, $edit = false, $idnya, $listLayanan;

    public $form = [
        'layanan_id' => null,
        'tanggal_mulai' => null,
        'tanggal_selesai' => null,
    ];

    public function mount()
    {
        $this->listLayanan = DemoLayanan::all()->toArray();
    }

    public function getEdit($a)
    {
        $this->form = DemoKelas::find($a)->only(['layanan_id', 'tanggal_mulai', 'tanggal_selesai']);
        $this->idHapus = $a;
        $this->edit = true;
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
    }

    public function store()
    {
        DemoKelas::create($this->form);
    }

    public function delete($id)
    {
        $this->idHapus = $id;
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Apakah Anda yakin?',
                text: "Apakah kamu ingin menghapus data ini? proses ini tidak dapat dikembalikan.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.hapus()
            }
          })
        JS);
    }

    public function hapus()
    {
        DemoKelas::destroy($this->idHapus);
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);
    }

    public function storeUpdate()
    {
        DemoKelas::find($this->idHapus)->update($this->form);
        $this->reset();
        $this->edit = false;
    }


    public function batal()
    {
        $this->edit = false;
        $this->reset();

    }

    public function render()
    {
        $data = Tagihan::with(['layanan']);
        if(auth()->user()->hasRole('user')){
            $data->where('user_id', auth()->user()->id);
        }else {
            $data->where('bukti_bayar', '<>', '')->orWhere('bukti_bayar', '<>', null);
        }

        $data =   $data->paginate(10);
        // dd($data);

        return view('livewire.demo.list-tagihan', [
            'post' => $data,
        ]);
    }
}

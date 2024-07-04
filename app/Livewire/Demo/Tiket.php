<?php

namespace App\Livewire\Demo;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Demo\Tiket as DemoTiket;
use App\Models\His\ComCode;
use Livewire\Attributes\On;


class Tiket extends Component
{

    use WithPagination;

    public $idHapus, $edit = false, $idnya, $pelapor;

    public $listUser, $listTiket;

    public $form = [
        'user_id' => null,
        'masalah' => null,
        'status_tiket_tp' => null,
        'tindak_lanjut' => null,
    ];

    public function mount($id = '')
    {
        $this->listUser = User::all()->toArray();
        $this->listTiket = ComCode::where('code_group', 'STATUS_TIKET_TP')->get()->toArray();
    }

    #[On('pilih-pelapor')]
    public function pilihPelapor($id = "")
    {
        $this->pelapor = User::find($id);
        $this->form['user_id'] = $this->pelapor->id;
    }

    public function getEdit($a)
    {
        $this->form = DemoTiket::find($a)->only(['user_id', 'masalah', 'status_tiket_tp', 'tindak_lanjut']);
        $this->idHapus = $a;
        $this->edit = true;
        $this->pilihPelapor($this->form['user_id']);
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
        DemoTiket::create($this->form);
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
        DemoTiket::destroy($this->idHapus);
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
        DemoTiket::find($this->idHapus)->update($this->form);
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
        $data = DemoTiket::with(['status', 'nama'])->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.demo.tiket', [
            'post' => $data,
        ]);
    }
}

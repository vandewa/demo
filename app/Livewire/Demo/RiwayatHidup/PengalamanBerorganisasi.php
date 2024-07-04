<?php

namespace App\Livewire\Demo\RiwayatHidup;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Demo\RiwayatHidup;


class PengalamanBerorganisasi extends Component
{
    use WithPagination;

    public $idHapus, $edit = false, $idnya;

    public $form = [
        'nama' => null,
        'lokasi' => null,
        'sebagai' => null,
        'riwayat_hidup_tp' => 'RIWAYAT_HIDUP_TP_05',
        'user_id' => null
    ];

    public function mount($id = '')
    {
        $this->idnya = $id;
    }

    public function getEdit($a)
    {
        $this->form = RiwayatHidup::find($a)->only(['nama', 'lokasi', 'sebagai']);
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
        $this->form['user_id'] = auth()->user()->id;
        RiwayatHidup::create($this->form);
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
        RiwayatHidup::destroy($this->idHapus);
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
        RiwayatHidup::find($this->idHapus)->update($this->form);
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
        if (auth()->user()->hasRole('superadministrator')) {
            $data = RiwayatHidup::where('riwayat_hidup_tp', 'RIWAYAT_HIDUP_TP_05')->where('user_id', $this->idnya)->paginate(10);
        } else {
            $data = RiwayatHidup::where('riwayat_hidup_tp', 'RIWAYAT_HIDUP_TP_05')->where('user_id', auth()->user()->id)->paginate(10);
        }

        return view('livewire.demo.riwayat-hidup.pengalaman-berorganisasi', [
            'post' => $data,
        ]);
    }
}

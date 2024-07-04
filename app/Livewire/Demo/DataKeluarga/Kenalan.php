<?php

namespace App\Livewire\Demo\DataKeluarga;

use App\Models\ComCode;
use Livewire\Component;
use App\Models\Demo\DataKeluarga;
use Livewire\WithPagination;


class Kenalan extends Component
{
    use WithPagination;

    public $idHapus, $edit = false, $idnya;



    public $form = [
        'nama' => '',
        'jabatan' => '',
        'instansi' => '',
        'hubungan' => '',
        'data_keluarga_tp' => 'DATA_KELUARGA_TP_05',
        'user_id' => null
    ];

    public function mount($id = '')
    {
        $this->idnya = $id;
        $this->ambilJenisKelamin();
    }

    public function ambilJenisKelamin()
    {
        return ComCode::where('code_group', 'GENDER_TP')->get()->toArray();
    }


    public function getEdit($a)
    {
        $this->form = DataKeluarga::find($a)->only(['nama', 'jabatan', 'instansi', 'hubungan']);
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
        DataKeluarga::create($this->form);
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
        DataKeluarga::destroy($this->idHapus);
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
        DataKeluarga::find($this->idHapus)->update($this->form);
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
            $data = DataKeluarga::with(['jenisKelamin'])->where('data_keluarga_tp', 'DATA_KELUARGA_TP_05')->where('user_id', $this->idnya)->paginate(10);
        } else {
            $data = DataKeluarga::with(['jenisKelamin'])->where('data_keluarga_tp', 'DATA_KELUARGA_TP_05')->where('user_id', auth()->user()->id)->paginate(10);
        }

        return view('livewire.demo.data-keluarga.kenalan', [
            'post' => $data,
            'listJenisKelamin' => $this->ambilJenisKelamin(),
        ]);
    }
}

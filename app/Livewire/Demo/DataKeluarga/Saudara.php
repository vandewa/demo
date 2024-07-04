<?php

namespace App\Livewire\Demo\DataKeluarga;

use App\Models\ComCode;
use Livewire\Component;
use App\Models\Demo\DataKeluarga;
use Livewire\WithPagination;


class Saudara extends Component
{
    use WithPagination;

    public $idHapus, $edit = false, $idnya;

    public $form = [
        'nama' => null,
        'telepon' => null,
        'gender_tp' => null,
        'tempat_lahir' => null,
        'tgl_lahir' => null,
        'pendidikan' => null,
        'education_tp' => null,
        'data_keluarga_tp' => 'DATA_KELUARGA_TP_04',
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

    public function ambilPendidikan()
    {
        return ComCode::where('code_group', 'EDUCATION_CD')->get()->toArray();
    }


    public function getEdit($a)
    {
        $this->form = DataKeluarga::find($a)->only(['nama', 'gender_tp', 'tgl_lahir', 'pendidikan', 'pekerjaan']);
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
            $data = DataKeluarga::with(['jenisKelamin', 'pendidikannya'])->where('data_keluarga_tp', 'DATA_KELUARGA_TP_04')->where('user_id', $this->idnya)->paginate(10);
        } else {
            $data = DataKeluarga::with(['jenisKelamin', 'pendidikannya'])->where('data_keluarga_tp', 'DATA_KELUARGA_TP_04')->where('user_id', auth()->user()->id)->paginate(10);
        }

        return view('livewire.demo.data-keluarga.saudara', [
            'post' => $data,
            'listJenisKelamin' => $this->ambilJenisKelamin(),
            'listPendidikan' => $this->ambilPendidikan()
        ]);
    }
}

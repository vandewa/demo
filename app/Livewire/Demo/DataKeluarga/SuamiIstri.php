<?php

namespace App\Livewire\Demo\DataKeluarga;

use Livewire\Component;
use App\Models\His\ComCode;
use Illuminate\Support\Arr;
use Livewire\WithPagination;
use App\Models\Demo\DataKeluarga;


class SuamiIstri extends Component
{
    use WithPagination;

    public $form = [
        'nama' => null,
        'telepon' => null,
        'gender_tp' => null,
        'tempat_lahir' => null,
        'tgl_lahir' => null,
        'pendidikan' => null,
        'education_tp' => null,
        'data_keluarga_tp' => 'DATA_KELUARGA_TP_01',
    ];

    public $idnya, $user_id, $cek;


    public function mount($id = '')
    {
        if (auth()->user()->hasRole('superadministrator')) {
            $demo_data_keluarga = DataKeluarga::firstOrCreate(
                ['data_keluarga_tp' => 'DATA_KELUARGA_TP_01'],
                ['user_id' => $id],
            )->toArray();
        } else {
            $demo_data_keluarga = DataKeluarga::firstOrCreate(
                ['data_keluarga_tp' => 'DATA_KELUARGA_TP_01'],
                ['user_id' => auth()->user()->id],
            )->toArray();
        }
        $this->idnya = $id;
        $this->form = $demo_data_keluarga;
        $this->idnya = $demo_data_keluarga['user_id'];
        $this->ambilJenisKelamin();
        $this->ambilPendidikan();

    }

    public function ambilJenisKelamin()
    {
        return ComCode::where('code_group', 'GENDER_TP')->get()->toArray();
    }

    public function ambilPendidikan()
    {
        return ComCode::where('code_group', 'EDUCATION_CD')->get()->toArray();
    }

    public function save()
    {
        DataKeluarga::where('user_id', auth()->user()->id)->where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->update(Arr::except($this->form, ['created_at', 'updated_at']));

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);
    }


    public function render()
    {
        if (auth()->user()->hasRole('superadministrator')) {
            $data = DataKeluarga::where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->where('user_id', $this->idnya)->get();
        } else {
            $data = DataKeluarga::where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->where('user_id', auth()->user()->id)->get();
        }


        // dd($data);


        return view('livewire.demo.data-keluarga.suami-istri', [
            'post' => $data,
            'listJenisKelamin' => $this->ambilJenisKelamin(),
            'listPendidikan' => $this->ambilPendidikan()
        ]);
    }
}

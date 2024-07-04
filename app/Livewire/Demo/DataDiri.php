<?php

namespace App\Livewire\Demo;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\His\ComCode;
use Illuminate\Support\Arr;
use App\Models\Demo\Tagihan;
use Illuminate\Support\Facades\Auth;
use App\Models\Demo\DataDiri as DemoDataDiri;

class DataDiri extends Component
{

    public $umur = 0;
    public $form = [
        'nama' => '',
        'user_id' => '',
        'tempat_lahir' => '',
        'tgl_lahir' => '',
        'marital_tp' => '',
        'sex_tp' => '',
        'ktp' => '',
        'telepon' => '',
        'telepon_wali' => '',
        'blood_tp' => '',
        'ukuran_sepatu' => '',
        'ukuran_baju' => '',
        'alamat_sekarang' => '',
        'alamat_wali' => '',
        'education_tp' => '',
        'keterampilan' => '',
        'agama' => '',
        'nama_wali' => '',
    ];

    public $idnya;
    public $ceklunas = false;


    public function mount($id = '')
    {
        if (auth()->user()->hasRole('superadministrator')) {
            $demo_data_diri = DemoDataDiri::firstOrCreate(
                ['user_id' => $id],
            )->toArray();
        } else {
            $demo_data_diri = DemoDataDiri::firstOrCreate(
                ['user_id' => auth()->user()->id],
            )->toArray();
        }

        $this->form = $demo_data_diri;
        $this->ambilJenisKelamin();
        $this->ambilStatus();
        $this->idnya = $id;

        $cek = Tagihan::where('user_id', auth()->user()->id)->where('status', 'Lunas')->first();

        if ($cek) {
            $this->ceklunas = true;
        }
    }

    public function ambilJenisKelamin()
    {
        return ComCode::where('code_group', 'GENDER_TP')->get()->toArray();
    }
    public function ambilStatus()
    {
        return ComCode::where('code_group', 'MARITAL_TP')->get()->toArray();
    }
    public function ambilDarah()
    {
        return ComCode::where('code_group', 'BLOOD_TP')->get()->toArray();
    }
    public function ambilPendidikan()
    {
        return ComCode::where('code_group', 'EDUCATION_CD')->get()->toArray();
    }

    public function updated($property)
    {
        if ($property == 'form.tgl_lahir') {
            $this->umur = Carbon::createFromFormat('Y-m-d', $this->form['tgl_lahir'])->diffInYears(Carbon::now());
        }
    }

    public function save()
    {
        // dd($this->form);

        $this->validate([
            'form.nama' => 'required',
            'form.tempat_lahir' => 'required',
            'form.tgl_lahir' => 'required',
            'form.marital_tp' => 'required',
            'form.sex_tp' => 'required',
            'form.agama' => 'required',
            'form.ktp' => 'required',
            'form.telepon' => 'required',
            'form.telepon_wali' => 'required',
            'form.blood_tp' => 'required',
            'form.ukuran_sepatu' => 'required',
            'form.ukuran_baju' => 'required',
            'form.alamat_sekarang' => 'required',
            'form.alamat_wali' => 'required',
            'form.education_tp' => 'required',
            'form.keterampilan' => 'required',
        ]);

        // dd('faking');

        DemoDataDiri::where('user_id', auth()->user()->id)->update(Arr::except($this->form, ['created_at', 'updated_at']));

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.kembalii()
            }
          })
        JS);
    }

    public function kembalii()
    {
        $this->redirect(route('pendaftaran.data-diri'));
    }

    public function batal()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.demo.data-diri', [
            'listJenisKelamin' => $this->ambilJenisKelamin(),
            'listStatus' => $this->ambilStatus(),
            'listDarah' => $this->ambilDarah(),
            'listPendidikan' => $this->ambilPendidikan()
        ]);
    }
}

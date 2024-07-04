<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use App\Models\DataPribadi;
use App\Models\His\ComCode;
use Illuminate\Support\Arr;
use App\Models\Demo\Dokumen;
use App\Models\Demo\DataKeluarga;
use App\Models\Demo\RiwayatHidup;
use Illuminate\Support\Facades\Auth;
use App\Models\Demo\DataDiri as DemoDataDiri;
use App\Models\Demo\KeteranganLain;

class TampilanPengguna extends Component
{

    public $route;

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
        'blod_tp' => '',
        'ukuran_sepatu' => '',
        'ukuran_baju' => '',
        'alamat_sekarang' => '',
        'alamat_wali' => '',
        'education_tp' => '',
        'keterampilan' => '',
        'agama' => '',
    ];

    public $formDataPribadi = [
        'tinggi' => '',
        'berat' => '',
        'hoby' => '',
        'or_yg_dikuasai' => '',
        'sakit' => '',
        'sakit_apa' => '',
        'sakit_kapan' => '',
        'kecelakaan' => '',
        'kecelakaan_ket' => '',
        'kecelakaan_kapan' => '',
        'kecelakaan_apa' => '',
        'kecelakaan_akibat' => '',
        'kegiatan_terlarang' => '',
        'polisi' => '',
        'polisi_ket' => '',
        'astek' => '',
        'no_kpa' => '',
        'penataran' => '',
        'penataran_kapan' => '',
        'penataran_pola' => '',
        'penataran_penyelenggara' => '',
        'bahasa_1' => '',
        'bahasa_2' => '',
        'bahasa_3' => '',
        'bahasa_4' => '',
        'sim' => '',
    ];

    public $formSuamiIstri = [
        'nama' => '',
        'tempat_lahir' => '',
        'tgl_lahir' => '',
        'pendidikan' => '',
        'pekerjaan' => '',
        'gender_tp' => '',
        'data_keluarga_tp' => 'DATA_KELUARGA_TP_01',
    ];

    public $formKeteranganLain = [
        'tunjangan_diterima' => '',
        'gaji_diharap' => '',
        'bersedia_ditempatkan' => '',
        'mematuhi_peraturan' => '',
        'keterangan_lain' => '',
        'status' => '',
    ];

    public $idnya;


    public function mount($id = '')
    {
        $demo_data_diri = DemoDataDiri::where('user_id', $id)->first();
        $demo_data_pribadi = DataPribadi::where('user_id', $id)->first();
        $data_suami_istri = DataKeluarga::where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->where('user_id', $id)->first();
        $dataKeteranganLain = KeteranganLain::where('user_id', $id)->first();

        if ($demo_data_diri) {
            $demo_data_diri = DemoDataDiri::where('user_id', $id)->first()->toArray();
        } else {
            $this->route = url()->previous();
        }

        if ($demo_data_pribadi) {
            $demo_data_pribadi = DataPribadi::where('user_id', $id)->first()->toArray();
        } else {
            $this->route = url()->previous();
        }

        if ($data_suami_istri) {
            $data_suami_istri = DataKeluarga::where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->where('user_id', $id)->first()->toArray();
        } else {
            $this->route = url()->previous();
        }

        if ($dataKeteranganLain) {
            $dataKeteranganLain = KeteranganLain::where('user_id', $id)->first()->toArray();
        } else {
            $this->route = url()->previous();
        }


        $this->form = $demo_data_diri;
        $this->formDataPribadi = $demo_data_pribadi;
        $this->formSuamiIstri = $data_suami_istri;
        $this->formKeteranganLain = $dataKeteranganLain;
        $this->ambilJenisKelamin();
        $this->ambilStatus();
        $this->idnya = $id;
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

    public function save()
    {
        // dd($this->form);

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
        $dataAnak = DataKeluarga::with(['jenisKelamin'])->where('data_keluarga_tp', 'DATA_KELUARGA_TP_02')->where('user_id', $this->idnya)->get();
        $dataOrangtua = DataKeluarga::with(['jenisKelamin'])->where('data_keluarga_tp', 'DATA_KELUARGA_TP_03')->where('user_id', $this->idnya)->get();
        $dataSaudara = DataKeluarga::with(['jenisKelamin'])->where('data_keluarga_tp', 'DATA_KELUARGA_TP_04')->where('user_id', $this->idnya)->get();
        $dataKenalan = DataKeluarga::with(['jenisKelamin'])->where('data_keluarga_tp', 'DATA_KELUARGA_TP_05')->where('user_id', $this->idnya)->get();
        $dataSekolah = RiwayatHidup::where('riwayat_hidup_tp', 'RIWAYAT_HIDUP_TP_01')->where('user_id', $this->idnya)->get();
        $dataKursus = RiwayatHidup::where('riwayat_hidup_tp', 'RIWAYAT_HIDUP_TP_02')->where('user_id', $this->idnya)->get();
        $dataPengalamanKerja = RiwayatHidup::where('riwayat_hidup_tp', 'RIWAYAT_HIDUP_TP_03')->where('user_id', $this->idnya)->get();
        $dataPengalamanLuarNegeri = RiwayatHidup::where('riwayat_hidup_tp', 'RIWAYAT_HIDUP_TP_04')->where('user_id', $this->idnya)->get();
        $dataPengalamanOrganisasi = RiwayatHidup::where('riwayat_hidup_tp', 'RIWAYAT_HIDUP_TP_05')->where('user_id', $this->idnya)->get();
        $dataReferensi = RiwayatHidup::where('riwayat_hidup_tp', 'RIWAYAT_HIDUP_TP_06')->where('user_id', $this->idnya)->get();
        $dataDokumen = Dokumen::where('user_id', $this->idnya)->first();


        return view('livewire.demo.tampilan-pengguna', [
            'listJenisKelamin' => $this->ambilJenisKelamin(),
            'listStatus' => $this->ambilStatus(),
            'listDarah' => $this->ambilDarah(),
            'listPendidikan' => $this->ambilPendidikan(),
            'dataAnak' => $dataAnak,
            'dataOrangtua' => $dataOrangtua,
            'dataSaudara' => $dataSaudara,
            'dataKenalan' => $dataKenalan,
            'dataSekolah' => $dataSekolah,
            'dataKursus' => $dataKursus,
            'dataPengalamanKerja' => $dataPengalamanKerja,
            'dataPengalamanLuarNegeri' => $dataPengalamanLuarNegeri,
            'dataPengalamanOrganisasi' => $dataPengalamanOrganisasi,
            'dataReferensi' => $dataReferensi,
            'dataDokumen' => $dataDokumen,
        ]);
    }
}

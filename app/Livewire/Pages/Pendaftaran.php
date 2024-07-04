<?php

namespace App\Livewire\Pages;

use App\Models\His\ComCode;
use App\Models\His\ComNation;
use App\Models\His\ComRegion;
use App\Models\His\TrxInsurance;
use App\Models\His\TrxPasien;
use App\Models\His\TrxPasienInsurance;
use Livewire\Component;
use Illuminate\Support\Arr;

class Pendaftaran extends Component
{
    public $edit = false;
    public $form = [
      'no_rm' => null,
      'pasien_cd' => null,
      'pasien_nm' => null,
      'birth_date' => null,
      'age' => null,
      'gender_tp' => null,
      'address' => null,
      'region_prop' => null,
      'region_kab' => null,
      'region_kec' => null,
      'region_kel' => null,
      'phone' => null,
      'mobile1' => null,
      'pasien_tp' => null,
      'marital_tp' => null,
      'education_cd' => null,
      'occupation_cd' => null,
      'religion_cd' => null,
      'identity_tp' => null,
      'identity_no' => null,
      'nation_cd' => null,
      'blood_tp' => null,
      'weight' => null,
      'height' => null,
      'email' => null,
      'postcode' => null,
      'dad_name' => null,
      'mom_name' => null,
      'dad_name' => null,
      'pj_name' => null,
      'pj_tp' => null,
      'pj_address' => null,
      'pj_tp' => null,
      'pj_telp' => null,
      'pj_date_birth' => null,
    ];
    public $insurance = [
        'insurance_tp' => null,
        'insurance_no' => null
    ];

    public $jk, $prop, $kab, $kec, $kel, $tppasien, $status, $pendidikan, $pekerjaan, $suku, $agama, $ras,
    $negara, $goldarah, $tipeIdentitas, $tpjaminan, $family, $isEdit = false;

    public function mount($id="") {
        $this->form['no_rm'] = gen_no_rm();
        $this->jk = get_code('GENDER_TP');
        $this->prop = ComRegion::where('region_level', 1)->get()->toArray();
        $this->tppasien = get_code('PASIEN_TP');
        $this->tpjaminan = TrxInsurance::all()->toArray();
        $this->status = get_code('MARITAL_TP');
        $this->pendidikan = get_code('EDUCATION_CD');
        $this->pekerjaan = get_code('OCCUPATION_CD');
        $this->suku = get_code('RACE_CD');
        $this->agama = get_code('RELIGION_CD');
        $this->negara = ComNation::all()->toArray();
        $this->goldarah = get_code('BLOOD_TP');
        $this->tipeIdentitas = get_code('IDENTITY_TP');
        $this->family = get_code('FAMILY_TP');

        if($id == ""){

            $this->form['nation_cd'] = 62;
            $this->form['region_prop'] = 33;
            $this->changeKab($this->form['region_prop']);
            $this->form['region_kab'] = 3307;
            $this->changeKec($this->form['region_kab']);
            $this->form['region_kec'] = 3307030;
            $this->changeKel($this->form['region_kec']);
        } else {
            $this->isEdit = true;
          $this->form=  TrxPasien::find($id)->only(
                [
                'no_rm',
                'pasien_cd',
                'pasien_nm',
                'birth_date',
                'age',
                'gender_tp',
                'address',
                'region_prop',
                'region_kab',
                'region_kec',
                'region_kel',
                'phone',
                'mobile1',
                'pasien_tp',
                'marital_tp',
                'education_cd',
                'occupation_cd',
                'religion_cd',
                'identity_tp',
                'identity_no',
                'nation_cd',
                'blood_tp',
                'weight',
                'height',
                'email',
                'postcode',
                'dad_name',
                'mom_name',
                'dad_name',
                'pj_name',
                'pj_tp',
                'pj_address',
                'pj_tp',
                'pj_telp',
                'pj_date_birth',]
            );

            $insurance = TrxPasienInsurance::where('pasien_cd', $id)->first();
            if($insurance){
                $this->insurance['insurance_tp'] = $insurance->insurance_tp;
                $this->insurance['insurance_no'] = $insurance->insurance_no;
            }

            $this->changeKab($this->form['region_prop']);
            $this->changeKec($this->form['region_kab']);
            $this->changeKel($this->form['region_kec']);

        }



    }


    public function changeKab($id) {
        $this->kab = ComRegion::where('region_root', $id)->get()->toArray();
    }

    public function changeKec($id) {
        $this->kec = ComRegion::where('region_root', $id)->get()->toArray();
    }
    public function changeKel($id) {
        $this->kel = ComRegion::where('region_root', $id)->get()->toArray();
    }

    public function updated($property)
    {
        // $hitung umum
        if ($property === 'form.birth_date') {
            $date = new \DateTime($this->form['birth_date']);
            $now = new \DateTime();
            $interval = $now->diff($date);
            $this->form['age'] = $interval->y;
        }


        if ($property === 'form.pasien_tp') {
            if($this->form['pasien_tp'] != 'PASIEN_TP_02') {
                $this->insurance['insurance_cd'] = "";
                $this->insurance['insurance_no'] = "";
            }
        }

        if ($property === 'form.region_prop') {
            $this->changeKab($this->form['region_prop']);
            $this->form['region_kab'] = '';
            $this->form['region_kec'] = '';
            $this->form['region_kel'] = '';
        }
        if ($property === 'form.region_kab') {
            $this->changeKec($this->form['region_kab']);
            $this->form['region_kec'] = '';
            $this->form['region_kel'] = '';
         }
        if ($property === 'form.region_kec') {
            $this->changeKel($this->form['region_kec']);
            $this->form['region_kel'] = '';
         }
    }

    public function save() {
        $this->validate([
            'form.pasien_nm' => 'required',
            'form.pasien_tp' => 'required',
            'form.gender_tp' => 'required',
            'insurance.insurance_tp' => 'required_if:form.pasien_tp,PASIEN_TP_02',
            'insurance.insurance_no' => 'required_if:form.pasien_tp,PASIEN_TP_02',
        ]);

        if($this->isEdit){
            $this->saveEdit();
        }else {
            $this->store();
        }
    }

    public function store() {
        $this->form['no_rm'] = gen_no_rm();
        $this->form['pasien_cd'] = gen_pasien_cd();
        $data = TrxPasien::create($this->form);
        if($this->form['pasien_tp'] == 'PASIEN_TP_02') {
            $data->asuransi()->create($this->insurance);
        }
        $this->redirect(route('pasien.index'));
    }

    public function saveEdit() {
        TrxPasien::find($this->form['pasien_cd'])->update(
            Arr::except($this->form, ['pasien_cd', 'no_rm'])
        );

        $cek =  TrxPasienInsurance::where('pasien_cd', $this->form['pasien_cd'])->first();
        if($cek) {
            TrxPasienInsurance::where('pasien_cd', $this->form['pasien_cd'])
            ->update($this->insurance);
            $this->redirect(route('pasien.index'));
        } else {
            TrxPasienInsurance::create([
                'pasien_cd' => $this->form['pasien_cd'],
                'insurance_tp' => $this->insurance['insurance_tp'],
                'insurance_no' => $this->insurance['insurance_no'],
            ]);
        }
        $this->redirect(route('pasien.index'));
    }

    public function render()
    {

        return view('livewire.pages.pendaftaran');
    }
}

<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use Illuminate\Support\Arr;
use App\Models\DataPribadi as Pribadi;


class DataPribadi extends Component
{

    public $form = [
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

    public $idnya, $user_id;

    public function mount($id = '')
    {
        if (auth()->user()->hasRole('superadministrator')) {
            $demo_data_pribadi = Pribadi::firstOrCreate(
                ['user_id' => $id],
            )->toArray();
        } else {
            $demo_data_pribadi = Pribadi::firstOrCreate(
                ['user_id' => auth()->user()->id],
            )->toArray();
        }
        $this->idnya = $id;
        $this->form = $demo_data_pribadi;
    }

    public function save()
    {
        // dd($this->form);

        Pribadi::where('user_id', auth()->user()->id)->update(Arr::except($this->form, ['created_at', 'updated_at']));

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);
    }

    public function batal()
    {
        $this->reset();
    }

    public function updated($property)
    {
        //
    }

    public function render()
    {
        return view('livewire.demo.data-pribadi', [

        ]);
    }
}

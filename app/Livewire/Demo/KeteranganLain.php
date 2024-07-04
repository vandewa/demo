<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use Illuminate\Support\Arr;
use App\Models\Demo\KeteranganLain as DemoKeteranganLain;

class KeteranganLain extends Component
{

    public $form = [
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
        if (auth()->user()->hasRole('superadministrator')) {
            $demo = DemoKeteranganLain::firstOrCreate(
                ['user_id' => $id],
            )->toArray();
        } else {
            $demo = DemoKeteranganLain::firstOrCreate(
                ['user_id' => auth()->user()->id],
            )->toArray();
        }

        $this->idnya = $id;
        $this->form = $demo;

    }

    public function save()
    {
        $this->js(<<<'JS'
        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Data yang sudah diisi tidak dapat diubah!",
            icon: "warning",
            // showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Lanjut!"
            }).then((result) => {
                if (result.isConfirmed) {
                $wire.simpan()
            }
          })
        JS);
    }

    public function simpan()
    {
        $this->form['status'] = true;
        DemoKeteranganLain::where('user_id', auth()->user()->id)->update(Arr::except($this->form, ['created_at', 'updated_at']));

        $this->js(<<<'JS'
        Swal.fire({
            title: "Berhasil!",
            text: "Data berhasil disimpan.",
            icon: "success"
          })
        JS);
    }

    public function render()
    {
        return view('livewire.demo.keterangan-lain');
    }
}

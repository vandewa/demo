<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use App\Models\Demo\Dokumen as Document;
use Livewire\WithFileUploads;


class Dokumen extends Component
{

    use WithFileUploads;

    public $kk, $ktp, $akta, $mcu, $info, $idnya;

    public function mount($id = '')
    {
        if (auth()->user()->hasRole('superadministrator')) {
            $dokumen = Document::firstOrCreate(
                ['user_id' => $id],
            )->toArray();
        } else {
            $dokumen = Document::firstOrCreate(
                ['user_id' => auth()->user()->id],
            )->toArray();
        }

        $this->idnya = $id;
        $this->info = $dokumen;

        // dd($this->info);
    }


    public function save()
    {
        if ($this->kk) {
            $this->validate([
                'kk' => 'image', // 1MB Max
            ]);
            $kk = $this->kk->store('public/photos');
            Document::where('user_id', auth()->user()->id)->update([
                'kk' => $kk
            ]);
        }


        if ($this->ktp) {
            $this->validate([
                'ktp' => 'image', // 1MB Max
            ]);
            $ktp = $this->ktp->store('public/photos');
            Document::where('user_id', auth()->user()->id)->update([
                'ktp' => $ktp
            ]);
        }

        if ($this->akta) {
            $this->validate([
                'akta' => 'image', // 1MB Max
            ]);
            $akta = $this->akta->store('public/photos');
            Document::where('user_id', auth()->user()->id)->update([
                'akta' => $akta
            ]);
        }

        if ($this->mcu) {
            $this->validate([
                'mcu' => 'image', // 1MB Max
            ]);
            $mcu = $this->mcu->store('public/photos');
            Document::where('user_id', auth()->user()->id)->update([
                'mcu' => $mcu
            ]);
        }

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
        // if (auth()->user()->hasRole('superadministrator')) {
        //     $data = Document::where('user_id', $this->idnya);
        // } else {
        //     $data = Document::where('user_id', auth()->user()->id)->first();
        // }

        return view('livewire.demo.dokumen', [
            // 'post' => $data
        ]);
    }

}

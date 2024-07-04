<?php

namespace App\Livewire\Demo\Sales;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Jobs\kirimWhatsapp;


class User extends Component
{
    use WithPagination;

    public $idHapus, $edit = false, $idnya;

    public $form = [
        'name' => null,
        'email' => null,
        'telepon' => null,
        'ref' => null,
        'password' => null,
    ];

    public function mount()
    {
        //
    }

    public function konversi_nomor($nohp)
    {
        // kadang ada penulisan no hp 0811 239 345
        $nohp = str_replace(" ", "", $nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace("(", "", $nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace(")", "", $nohp);
        // kadang ada penulisan no hp 0811.239.345
        $nohp = str_replace(".", "", $nohp);

        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($nohp), 0, 3) == '+62') {
                $hp = trim($nohp);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($nohp), 0, 1) == '0') {
                $hp = '+62' . substr(trim($nohp), 1);
            }
            return $hp ?? '';
        }
    }

    public function getEdit($a)
    {
        $this->form = ModelsUser::find($a)->only(['name', 'email', 'telepon']);
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
        $password = Str::random(8);
        $this->form['password'] = bcrypt($password);
        $this->form['telepon'] = $this->konversi_nomor($this->form['telepon']);
        $this->form['ref'] = auth()->user()->id;

        $a = ModelsUser::create($this->form);
        $a->addrole('user');

        $pesan = $this->form['name'] . ' telah terdaftar kedalam sistem LPK Marzuba Sejahtera Indonésia' . "\n" .
            'Username: ' . $this->form['email'] . "\n" .
            'Password : ' . $password . "\n" .
            'Gunakan link berikut untuk melengkapi akun Anda.' . "\n";
        kirimWhatsapp::dispatch($pesan, $this->form['telepon']);

        $devan = url('/login?mail=' . $this->form['email'] . '&password=' . $password);
        kirimWhatsapp::dispatch($devan, $this->form['telepon']);

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
        ModelsUser::destroy($this->idHapus);
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
        ModelsUser::find($this->idHapus)->update($this->form);
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
        $data = ModelsUser::where('ref', auth()->user()->id)->paginate(10);

        return view('livewire.demo.sales.user', [
            'post' => $data,
        ]);
    }
}

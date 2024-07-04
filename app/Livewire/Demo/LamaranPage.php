<?php

namespace App\Livewire\Demo;

use App\Models\Demo\Kategori;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Demo\Lamaran;
use App\Models\Demo\Layanan;
use App\Models\Demo\Kelas;
use App\Models\Demo\Tagihan;

class LamaranPage extends Component
{
    use WithPagination;
    public $layanan = [];

    public $layanan_id;
    public $kelas_id;
    public $status_pembayaran;
    public $metode_bayar;
    public $deskripsi;
    public $harga;
    public $kelas;
    public $detailLayanan;
    public $pilihkelas;
    public $termin;
    public $cek;
    public $kategori_id;
    public $kategori;



    public function mount()
    {

        if (auth()->user()->hasRole('user')) {
            if (!auth()->user()->active_st) {
                redirect()->route('dashboard');
            }
        }
        if (auth()->user()->hasRole('admin')) {
            redirect()->route('admin.aktivasi-user');
        }

        if (auth()->user()->hasRole('sales')) {
            redirect()->route('admin.user');
        }

        $this->kategori = Kategori::all();



        $this->cek = Lamaran::where('user_id', auth()->user()->id)->where('status', 'Dalam Proses')->first();
    }

    public function updated($property)
    {
        // $property: The name of the current property that was updated
        if ($property === 'kategori_id') {
            $this->layanan = Layanan::where('kategori_id', $this->kategori_id)->get();
        }

        if ($property === 'layanan_id') {

            if ($this->layanan_id) {
                $this->detailLayanan = Layanan::find($this->layanan_id);
                $this->kelas = Kelas::where('layanan_id', $this->layanan_id)->get();
            } else {
                $this->detailLayanan = null;
                $this->kelas = null;
            }

        }

    }
    public $jenisLamaran = '', $cari;

    public function simpan()
    {

        $cek = Lamaran::where('user_id', auth()->user()->id)->where('status', 'Dalam Proses')->first();
        if ($cek) {
            $this->js(<<<'JS'

                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Anda memiliki lamaran yang belum selesai diproses!",

                    });

        JS);

            return;
        }

        // if (!$this->pilihkelas) {

        //     $this->js(<<<'JS'

        //                 Swal.fire({
        //                 icon: "error",
        //                 title: "Oops...",
        //                 text: "Harap memilih kelas terlebih dahulu!",

        //                 });

        //     JS);

        //     return;
        // }
        // cek activasi
        if (!auth()->user()->active_st) {
            $this->js(<<<'JS'

            Swal.fire({
            title: 'Anda belum melakukan aktivasi akun, aktivasi sekarang?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Iya',
            denyButtonText: `Tidak`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $wire.redirectBayar()
            //   Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
            Swal.fire('Anda tidak jadi aktivasi', '', 'info')
            }})

        JS);




            return;
        }

        $this->js(<<<'JS'

                Swal.fire({
                title: 'Apakah Anda yakin, dengan pilihan kelas?',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'Iya',
                denyButtonText: `Tidak`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                $wire.save()
                //   Swal.fire('Saved!', '', 'success')
                } else if (result.isDenied) {
                Swal.fire('Anda tidak jadi melamar', '', 'info')
                }})
            JS);


    }

    public function redirectBayar()
    {
        redirect()->route('pendaftaran.aktivasi');
    }

    public function ambilKelas($id)
    {
        $this->pilihkelas = $id;

    }

    public function save()
    {


        $data = Lamaran::create([
            'user_id' => auth()->user()->id,
            'no_reg' => date('Y/m/d-') . auth()->user()->id,
            'tahapan_id' => 1,
            'status' => 'Dalam Proses',
            'lamaran_tp' => $this->detailLayanan->name,
            'layanan_id' => $this->layanan_id,
            // 'kelas_id' => $this->pilihkelas,
            'status_pembayaran' => 'Belum Lunas',
            'metode_bayar' => $this->metode_bayar,

        ]);

        // jika pembayaran menggunakan termin 2 kali
        if ($this->termin == 2) {
            Tagihan::create([
                'lamaran_id' => $data->id,
                'tanggal_tagihan' => now(),
                'user_id' => auth()->user()->id,
                'layanan_id' => $this->layanan_id,
                'nama_tagihan' => "Pembayaran ".$this->detailLayanan->name."  termin 1",
                'status' => 'Belum Lunas',
                'jumlah' => $this->detailLayanan->harga / 2,
                'pembayaran_tp' => $this->metode_bayar,

            ]);
            Tagihan::create([
                'lamaran_id' => $data->id,
                'tanggal_tagihan' => now(),
                'user_id' => auth()->user()->id,
                'layanan_id' => $this->layanan_id,
                'nama_tagihan' => "Pembayaran ". $this->detailLayanan->name."  termin 2",
                'status' => 'Belum Lunas',
                'jumlah' => $this->detailLayanan->harga / 2,
                'pembayaran_tp' => $this->metode_bayar,

            ]);
        } else {
            // jika pembayaran menggunakan termin 1 kali
            Tagihan::create([
                'lamaran_id' => $data->id,
                'tanggal_tagihan' => now(),
                'user_id' => auth()->user()->id,
                'layanan_id' => $this->layanan_id,
                'nama_tagihan' => "Pembayaran " . $this->detailLayanan->name,
                'status' => 'Belum Lunas',
                'jumlah' => $this->detailLayanan->harga,
                'pembayaran_tp' => $this->metode_bayar,
            ]);
        }
    }
    public function render()
    {

        $data = Lamaran::cari($this->cari)->with(['tahapan', 'user', 'pembayaran'])
            ->where('user_id', auth()->user()->id)
            ->paginate(10);
        return view('livewire.demo.lamaran-page', [
            'posts' => $data,

        ]);
    }
}

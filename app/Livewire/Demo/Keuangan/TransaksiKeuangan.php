<?php

namespace App\Livewire\Demo\Keuangan;

use Livewire\Component;
use App\Models\His\ComCode;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Demo\Kelas as DemoKelas;
use App\Models\Demo\Layanan as DemoLayanan;
use App\Models\Demo\TransaksiKeuangan as Uang;
use Laraindo\RupiahFormat;


class TransaksiKeuangan extends Component
{
    use WithPagination;

    use WithFileUploads;

    public $idHapus, $edit = false, $idnya, $listLayanan;

    public $form = [
        'tanggal_transaksi' => null,
        'name' => null,
        'pengeluaran_tp' => null,
        'nominal' => null,
    ];

    #[On('refresh')]

    public function mount()
    {
        $this->listLayanan = DemoLayanan::all()->toArray();
        $this->form['tanggal_transaksi'] = date('Y-m-d');

    }

    public function getEdit($a)
    {
        // $this->form = Uang::find($a)->only(['tanggal_transaksi', 'name', 'pengeluaran_tp', 'nominal']);
        // $this->idHapus = $a;
        // $this->edit = true;
        $this->dispatch('show-modal-keuangan', title: $a);

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
        $this->validate([
            'form.tanggal_transaksi' => 'required',
            'form.name' => 'required',
            'form.pengeluaran_tp' => 'required',
            'form.nominal' => 'required',
        ]);

        Uang::create($this->form);
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
        Uang::destroy($this->idHapus);
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
        Uang::find($this->idHapus)->update($this->form);
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
        $jenis = ComCode::where('code_group', 'PENGELUARAN_TP')->get();
        $data = Uang::with(['jenisKeuangan'])->paginate(10);

        $pemasukkan = Uang::where('pengeluaran_tp', 'PENGELUARAN_TP_01')->sum('nominal');
        $masuk = RupiahFormat::currency($pemasukkan);

        $pengeluaran = Uang::where('pengeluaran_tp', 'PENGELUARAN_TP_02')->sum('nominal');
        $keluar = RupiahFormat::currency($pengeluaran);

        $total = $pemasukkan - $pengeluaran;
        $akhir = RupiahFormat::currency($total);
        $terbilang = RupiahFormat::terbilang($total);

        return view('livewire.demo.keuangan.transaksi-keuangan', [
            'post' => $data,
            'jenis' => $jenis,
            'pemasukkan' => $masuk,
            'pengeluaran' => $keluar,
            'total' => $akhir,
            'terbilang' => $terbilang,
        ]);
    }
}

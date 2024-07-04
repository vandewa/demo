<?php

namespace App\Livewire\Component\Sidebar;

use App\Models\Demo\Tagihan;
use Livewire\Component;

class TagihanSidebar extends Component
{
    public function render()
    {
        $data = Tagihan::where('user_id', auth()->user()->id)->first();
        $jumlah = Tagihan::where('user_id', auth()->user()->id)->where('status', 'Belum Lunas')->count();
        return view('livewire.component.sidebar.tagihan-sidebar',[
            'data' => $data,
            'jumlah' => $jumlah
        ]);
    }
}

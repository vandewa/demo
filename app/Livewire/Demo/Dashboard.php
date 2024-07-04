<?php

namespace App\Livewire\Demo;

use Livewire\Component;

class Dashboard extends Component
{
    public function mount() {

        if(auth()->user()->hasRole('user')){
            $this->redirect(AktivasiPage::class);
        }
    }
    public function render()
    {
        return view('livewire.demo.dashboard');
    }
}

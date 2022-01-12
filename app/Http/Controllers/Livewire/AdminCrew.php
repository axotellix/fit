<?php

namespace App\Http\Controllers\Livewire;
use Livewire\Component;

// use > models
use App\Models\Trainer;

class AdminCrew extends Component
{
    public $crew;
    public $page = 'crew';

    public function render()
    {
        $this->crew = Trainer::all();

        //FIX: public vars are not injected automatically
        // return view('livewire.admin-gallery');       
        return view('livewire.admin-crew', ['crew' => $this->crew, 'page' => $this->page]);
    }
}

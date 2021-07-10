<?php

namespace App\Http\Livewire;
use Livewire\Component;

// use > models
use App\Models\Trainer;
use App\Models\Image;

class CrewGallery extends Component
{
    public $crew;

    public function render()
    {
        $this->crew = Trainer::all();
        return view('livewire.crew-gallery');
    }
}

<?php

namespace App\Http\Controllers\Livewire;
use Livewire\Component;

// use > models
use App\Models\Trainer;
use App\Models\Image;

class CrewView extends Component
{
    public $crew;
    public $img;
    public $activeCrew;
    public $member;

    protected $listeners = ['setCrew'];

    public function setCrew( $activeCrew ) {
        $this->activeCrew = $activeCrew;
    }
    
    public function mount() {
        $this->activeCrew = $this->member ?? 1;
    }
    public function render()
    {
        $this->crew = Trainer::find($this->activeCrew);
        $this->img  = Image::find($this->crew->photo_id);

        return view('livewire.crew-view');
    }
}

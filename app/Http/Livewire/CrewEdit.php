<?php

namespace App\Http\Livewire;
use Livewire\Component;

// use > models
use App\Models\Trainer;
use App\Models\Image;


class CrewEdit extends Component
{
    public $member;

    public function render()
    {
        // get > crew member`s data
        $member_data = Trainer::findOrFail($this->member);

        return view('livewire.crew-edit', ['member_data' => $member_data]);
    }
}

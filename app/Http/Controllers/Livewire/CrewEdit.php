<?php

namespace App\Http\Controllers\Livewire;
use Livewire\Component;

// use > models
use App\Models\Trainer;


class CrewEdit extends Component
{
    public $member;

    public function render()
    {
        // get > crew member`s data
        $member_data = Trainer::findOrFail($this->member);

        //FIX: public vars are not injected automatically
        // return view('livewire.crew-edit');       
        return view('livewire.crew-edit', ['member_data' => $member_data]);
    }
}

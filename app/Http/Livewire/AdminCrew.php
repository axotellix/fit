<?php

namespace App\Http\Livewire;
use Livewire\Component;

// use > models
use App\Models\Trainer;
use App\Models\Image;

class AdminCrew extends Component
{
    public $crew;

    public function render()
    {
        $this->crew = Trainer::all();
        return view('livewire.admin-crew')
            ->extends('layouts.admin.layout_admin');
    }
}

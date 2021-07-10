<?php

namespace App\Http\Livewire;
use Livewire\Component;

// use > models
use App\Models\Image;

class AdminGallery extends Component
{
    public $gyms;

    public function render()
    {
        $this->gyms = Image::where('category', '=', 'Gym')->get();
        return view('livewire.admin-gallery')
            ->extends('layouts.admin.layout_admin');
    }
}

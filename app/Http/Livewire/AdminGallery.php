<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminGallery extends Component
{
    public function render()
    {
        return view('livewire.admin-gallery')
            ->extends('layouts.admin.layout_admin');
    }
}

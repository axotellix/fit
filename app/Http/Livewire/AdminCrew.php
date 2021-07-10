<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminCrew extends Component
{
    public function render()
    {
        return view('livewire.admin-crew')
            ->extends('layouts.admin.layout_admin');
    }
}

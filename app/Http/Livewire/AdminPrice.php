<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminPrice extends Component
{
    public function render()
    {
        return view('livewire.admin-price')
            ->extends('layouts.admin.layout_admin');
    }
}

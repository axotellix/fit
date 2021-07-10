<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminContacts extends Component
{
    public function render()
    {
        return view('livewire.admin-contacts')
            ->extends('layouts.admin.layout_admin');
    }
}

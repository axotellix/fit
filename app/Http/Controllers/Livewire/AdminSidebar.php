<?php

namespace App\Http\Controllers\Livewire;

use Livewire\Component;

class AdminSidebar extends Component
{
    public $page; 

    public function render()
    {
        return view('livewire.admin-sidebar');
    }
}

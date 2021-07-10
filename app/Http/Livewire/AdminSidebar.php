<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminSidebar extends Component
{
    public $page = 'crew';

    public function setpage( $page ) {
        $this->page = $page;
    }

    public function render()
    {
        return view('livewire.admin-sidebar');
    }
}

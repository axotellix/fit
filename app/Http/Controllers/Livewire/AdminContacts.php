<?php

namespace App\Http\Controllers\Livewire;

use Livewire\Component;

class AdminContacts extends Component
{
    public $page = 'contacts';

    public function render()
    {
        return view('livewire.admin-contacts', ['page' => $this->page]);
    }
}

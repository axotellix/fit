<?php

namespace App\Http\Controllers\Livewire;
use Livewire\Component;

class AdminPrice extends Component
{
    public $page = 'price';

    public function render()
    {
        return view('livewire.admin-price', ['page' => $this->page]);
    }
}

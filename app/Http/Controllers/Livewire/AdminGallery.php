<?php

namespace App\Http\Controllers\Livewire;
use Livewire\Component;

// use > models
use App\Models\Image;

class AdminGallery extends Component
{
    public $gyms;
    public $page = 'gallery';

    public function render()
    {
        $this->gyms = Image::where('category', '=', 'Gym')->get();

        //FIX: public vars are not injected automatically
        // return view('livewire.admin-gallery');       
        return view('livewire.admin-gallery', ['gyms' => $this->gyms, 'page' => $this->page]);
    }
}

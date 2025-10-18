<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithPagination;

class Testimonialdata extends Component
{
    public function render()
    {
        return view('livewire.testimonialdata');
    }
}

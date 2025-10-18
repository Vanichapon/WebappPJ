<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithPagination;

class Editdata extends Component
{
    public function render()
    {
        return view('livewire.editdata');
    }
}

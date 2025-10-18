<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;


class Adddata extends Component
{
    public function render()
    {
        return view('livewire.adddata');
    }
    public $name, $position, $message;

protected $rules = [
    'name' => 'required|string|max:255',
    'position' => 'required|string|max:255',
    'message' => 'required|string|max:500',
];

public function add()
{
    $this->validate();

    Testimonial::create([
        'name' => $this->name,
        'position' => $this->position,
        'message' => $this->message,
    ]);

    session()->flash('success', 'Data added successfully!');
}

}

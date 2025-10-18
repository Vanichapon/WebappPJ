<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithPagination;

class Editdata extends Component
{
    public $id;
    public $name;
    public $position;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'message' => 'required|string|max:500',
    ];

    public function mount($id)
    {
        $this->id = $id;
        $item = Testimonial::findOrFail($id);
        $this->name = $item->name;
        $this->position = $item->position;
        $this->message = $item->message;
    }

    public function edit()
    {
        $this->validate();

        $item = Testimonial::findOrFail($this->id);
        $item->update([
            'name' => $this->name,
            'position' => $this->position,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Data updated successfully!');
    }

    public function render()
    {
        return view('livewire.editdata');
    }
}



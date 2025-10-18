<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        $model = User::all(); // ดึงข้อมูลผู้ใช้ทั้งหมด
        return view('livewire.welcome', compact('model'));
    }
}

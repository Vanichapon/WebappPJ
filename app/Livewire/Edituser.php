<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Edituser extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $id, $name, $email, $password;

    // Life Cycle Hook
    public function mount($id) {
        // dd($id);
        $user = User::find($id);
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;

    }

    public function edit() {
        User::find($this->id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),//การเข้ารหัส
        ]);
        return redirect()->to(route('userdata')); //ทำเสร็จแล้วไปที่หน้า userdata
    }

    public function render()
    {
        return view('livewire.edituser');
    }
}

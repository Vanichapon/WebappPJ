<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Userdata extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function delete($id)
    {
        User::find($id)->delete(); //ลบข้อมูลตาม id
    }

    public function render()
    {
        $model = User::paginate(5); //กำหนดจำนวนแถวต่อหน้า
        return view('livewire.userdata',compact('model'));
    }
}

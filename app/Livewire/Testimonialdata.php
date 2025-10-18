<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithPagination;

class Testimonialdata extends Component
{
    use WithPagination;

    public function delete($id)
    {
        Testimonial::find($id)->delete(); //ลบข้อมูลตาม id
    }

    public function render()
    {
        // ดึงข้อมูลจาก Model และแบ่งหน้า (pagination)
        $testimonials = Testimonial::orderBy('id', 'desc')->paginate(10);

        // ส่งข้อมูลไปยังหน้า livewire.testimonialdata
        return view('livewire.testimonialdata', [
            'testimonials' => $testimonials
        ]);
    }
}

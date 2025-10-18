<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    // ชื่อตารางในฐานข้อมูล (ถ้าชื่อไม่ตรงกับชื่อ model + s)
    protected $table = 'testimonials';

    // กำหนดคอลัมน์ที่อนุญาตให้เพิ่ม/แก้ไขข้อมูลได้ (mass assignment)
    protected $fillable = [
        'name',
        'comment',
        'rating',
        'image',
    ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @return array<string, string>
    //  */
    // protected function casts(): array
    // {
    //     return [
    //         'email_verified_at' => 'datetime',
    //     ];
    // }


}

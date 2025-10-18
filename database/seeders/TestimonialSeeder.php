<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name' => 'สมชาย ใจดี',
            'position' => 'นักท่องเที่ยว',
            'message' => 'ทริปสนุกมาก บริการเยี่ยมครับ',
        ]);

        Testimonial::create([
            'name' => 'สมหญิง สวยงาม',
            'position' => 'นักท่องเที่ยว',
            'message' => 'ประทับใจในความเป็นมืออาชีพของทีมงาน',
        ]);

        Testimonial::create([
            'name' => 'วิทยา ท่องเที่ยว',
            'position' => 'นักท่องเที่ยว',
            'message' => 'สถานที่ท่องเที่ยวสวยงาม บรรยากาศดีมาก',
        ]);
    }
}

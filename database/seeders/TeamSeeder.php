<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'image' => '1.jpg',
            'name' => ['en' => 'Ahmed Ali', 'ar' => 'أحمد علي'],
            'job' => ['en' => 'CEO', 'ar' => 'مدير تنفيذي'],
            'facebook' => 'https://facebook.com/ahmed',
            'instagram' => 'https://instagram.com/ahmed',
            'whatsapp' => '01000000000',
        ]);

        Team::create([
            'image' => '2.jpg',
            'name' => ['en' => 'Mahmoud Hassan', 'ar' => 'محمود حسن'],
            'job' => ['en' => 'Software Engineer', 'ar' => 'مهندس برمجيات'],
            'facebook' => null,
            'instagram' => null,
            'whatsapp' => null,
        ]);

        Team::create([
            'image' => '3.jpg',
            'name' => ['en' => 'Sara Mostafa', 'ar' => 'سارة مصطفى'],
            'job' => ['en' => 'Marketing Manager', 'ar' => 'مدير تسويق'],
            'facebook' => 'https://facebook.com/sara',
            'instagram' => 'https://instagram.com/sara',
            'whatsapp' => '01111111111',
        ]);
        Team::create([
            'image' => '4.jpg',
            'name' => ['en' => 'Marwa Ahmed', 'ar' => 'مروه أحمد'],
            'job' => ['en' => 'Marketing Manager', 'ar' => 'مدير تسويق'],
            'facebook' => 'https://facebook.com/sara',
            'instagram' => 'https://instagram.com/sara',
            'whatsapp' => '01111111111',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'image' =>  '1.jpg',
                'name'  =>  ['en' => 'Cooling Services', 'ar' => 'Cooling Services'],
                'notes' =>  ['en' => 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring natoque sem morbi hac nunc ultricies.', 'ar' => 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring natoque sem morbi hac nunc ultricies.'],
            ],
            [
                'image' =>  '2.jpg',
                'name'  =>  ['en' => 'AC Maintenance', 'ar' => 'AC Maintenance'],
                'notes' =>  ['en' => 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring natoque sem morbi hac nunc ultricies.', 'ar' => 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring natoque sem morbi hac nunc ultricies.'],
            ],
            [
                'image' =>  '3.jpg',
                'name'  =>  ['en' => 'Heating Services', 'ar' => 'Heating Services'],
                'notes' =>  ['en' => 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring natoque sem morbi hac nunc ultricies.', 'ar' => 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring natoque sem morbi hac nunc ultricies.'],
            ],
        ];
        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}

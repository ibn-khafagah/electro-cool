<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feedbacks = [
            [
                'image' => '1.jpg',
                'name'  =>  ['en' => 'Jim Grace', 'ar' => 'Jim Grace'],
                'notes' =>  ['en' => 'I feel very happy and be proud to connect with this industry. I presume this is a very productive and professional industry. I wish very good luck & success for this industry', 'ar' => 'I feel very happy and be proud to connect with this industry. I presume this is a very productive and professional industry. I wish very good luck & success for this industry'],
                'job'   =>  ['en' => 'Developer', 'ar' => 'Developer'],
            ],
            [
                'image' => '2.jpg',
                'name'  =>  ['en' => 'Jim Grace', 'ar' => 'Jim Grace'],
                'notes' =>  ['en' => 'I feel very happy and be proud to connect with this industry. I presume this is a very productive and professional industry. I wish very good luck & success for this industry', 'ar' => 'I feel very happy and be proud to connect with this industry. I presume this is a very productive and professional industry. I wish very good luck & success for this industry'],
                'job'   =>  ['en' => 'Developer', 'ar' => 'Developer'],
            ],
            [
                'image' => '3.jpg',
                'name'  =>  ['en' => 'Jim Grace', 'ar' => 'Jim Grace'],
                'notes' =>  ['en' => 'I feel very happy and be proud to connect with this industry. I presume this is a very productive and professional industry. I wish very good luck & success for this industry', 'ar' => 'I feel very happy and be proud to connect with this industry. I presume this is a very productive and professional industry. I wish very good luck & success for this industry'],
                'job'   =>  ['en' => 'Developer', 'ar' => 'Developer'],
            ],
        ];
        foreach ($feedbacks as $feedback) {
            Feedback::create($feedback);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\HomePage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomePage::create([
            'service_sub_title'         => ['en' => 'Our Service List', 'ar' => 'Our Service List'],
            'service_title'             => ['en' => 'What We\'re Offering', 'ar' => 'What We\'re Offering'],
            'counter_sub_title'         => ['en' => 'Numbers Speaks', 'ar' => 'Numbers Speaks'],
            'counter_title'             => ['en' => 'Funfacts For Best Cooling & Heating Services', 'ar' => 'Funfacts For Best Cooling & Heating Services'],
            'fun1'                      => ['en' => 'Expert Technicians', 'ar' => 'Expert Technicians'],
            'fun2'                      => ['en' => 'Awards Achievement', 'ar' => 'Awards Achievement'],
            'fun3'                      => ['en' => 'Achievement Clients', 'ar' => 'Achievement Clients'],
            'fun4'                      => ['en' => 'Completed Projects', 'ar' => 'Completed Projects'],
            'why_image'                 => 'why.jpg',
            'why_sub_title'             => ['en' => 'Our Service List', 'ar' => 'Our Service List'],
            'why_title'                 => ['en' => 'Why Choose Us', 'ar' => 'Why Choose Us'],
            'why_notes'                 => ['en' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'ar' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur'],
            'why_option1'               => ['en' => ' Refresing to get such a personal touch.', 'ar' => ' Refresing to get such a personal touch.'],
            'why_option2'               => ['en' => ' Duis aute irure dolor in reprehenderit in voluptate.', 'ar' => ' Duis aute irure dolor in reprehenderit in voluptate.'],
            'why_option3'               => ['en' => ' Velit esse cillum dolore eu fugiat nulla pariatur.', 'ar' => ' Velit esse cillum dolore eu fugiat nulla pariatur.'],
            'why_progress_number1'      => '77',
            'why_progress_number2'      => '60',
            'why_progress_number_title1' => ['en' => 'Air Conditioning', 'ar' => 'Air Conditioning'],
            'why_progress_number_title2' => ['en' => 'Heating', 'ar' => 'Heating'],
            'why_progress_main_title'   => ['en' => 'Get the Best Air Conditioning & Heating Services', 'ar' => 'Get the Best Air Conditioning & Heating Services'],
            'service_future_sub_title'  => ['en' => 'Our Service features', 'ar' => 'Our Service features'],
            'service_future_title'      => ['en' => 'What Else We’re Doing', 'ar' => 'What Else We’re Doing'],
            'service_future_notes'      => ['en' => 'Lorem ipsum dolor sit amet, consectetur notted adipisi cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'ar' => 'Lorem ipsum dolor sit amet, consectetur notted adipisi cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'],
            'book_service_image'        => 'book.jpg',
            'book_service_title'        => ['en' => 'Book a Professional Services', 'ar' => 'Book a Professional Services'],
            'book_service_notes'        => ['en' => 'There are many variations of passag of lorem ipsum but the have suffered alteration in some form by injected.', 'ar' => 'There are many variations of passag of lorem ipsum but the have suffered alteration in some form by injected.'],
            'feedback_sub_title'        => ['en' => 'Our Testimonials', 'ar' => 'Our Testimonials'],
            'feedback_title'            => ['en' => 'What They Say', 'ar' => 'What They Say'],
            'cll_to_action_title'       => ['en' => 'We Provide Premium Cooling & Heating Services', 'ar' => 'We Provide Premium Cooling & Heating Services'],
            'cll_to_action_video'       => 'https://www.youtube.com/watch?v=0A-NIeUcKDE&list',
            'team_sub_title'            => ['en' => 'Meet The Expert', 'ar' => 'Meet The Expert'],
            'team_title'                => ['en' => 'Team Member', 'ar' => 'Team Member'],
            'contact_sub_title'         => ['en' => 'Leave a Message', 'ar' => 'Leave a Message'],
            'contact_title'             => ['en' => 'Contact With Us', 'ar' => 'Contact With Us'],
            'cll_to_action_main_title'  => ['en' => 'Get the High Quality Heating & Air Conditioning Service', 'ar' => 'Get the High Quality Heating & Air Conditioning Service'],
            'blog_sub_title'            => ['en' => 'From the blog', 'ar' => 'From the blog'],
            'blog_title'                => ['en' => 'News & Articles', 'ar' => 'News & Articles'],
        ]);
    }
}

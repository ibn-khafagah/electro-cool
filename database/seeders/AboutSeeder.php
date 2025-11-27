<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::Create([
            'image1'    =>  '1.jpg',
            'image2'    =>  '2.jpg',
            'sub_title' =>  ['en' => 'Our Introduction', 'ar' => 'Our Introduction'],
            'title'     =>  ['en' => 'Welcome to Cooling & Heating Service Center', 'ar' => 'Welcome to Cooling & Heating Service Center'],
            'notes'     =>  ['en' => 'Lorem ipsum is simply free text dolor sit am adipi we help you ensure everyone is in the right jobs sicing elit.', 'ar' => 'Lorem ipsum is simply free text dolor sit am adipi we help you ensure everyone is in the right jobs sicing elit.'],
            'check1'    =>  ['en' => 'We\'re Certified', 'ar' => 'We\'re Certified'],
            'check2'    =>  ['en' => 'We\'re Certified', 'ar' => 'We\'re Certified'],
            'check3'    =>  ['en' => 'We\'re Certified', 'ar' => 'We\'re Certified'],
            'check4'    =>  ['en' => 'We\'re Certified', 'ar' => 'We\'re Certified'],
            'check1_notes'    =>  ['en' => 'Lorem ipsu free dolor sit amet consectetur notted.', 'ar' => 'Lorem ipsu free dolor sit amet consectetur notted.'],
            'check2_notes'    =>  ['en' => 'Lorem ipsu free dolor sit amet consectetur notted.', 'ar' => 'Lorem ipsu free dolor sit amet consectetur notted.'],
            'check3_notes'    =>  ['en' => 'Lorem ipsu free dolor sit amet consectetur notted.', 'ar' => 'Lorem ipsu free dolor sit amet consectetur notted.'],
            'check4_notes'    =>  ['en' => 'Lorem ipsu free dolor sit amet consectetur notted.', 'ar' => 'Lorem ipsu free dolor sit amet consectetur notted.'],
            'video'     =>  'https://youtube.com/'
        ]);
    }
}

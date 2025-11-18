<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners    =   [
            ['image' => '1.jpg', 'name' => 'Quality Heating & Air Condition Services'],
            ['image' => '2.jpg', 'name' => 'Quality Heating & Air Condition Services'],
            ['image' => '3.jpg', 'name' => 'Quality Heating & Air Condition Services'],
        ];
        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}

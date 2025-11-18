<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            SettingSeeder::class,
            BannerSeeder::class,
            ServiceSeeder::class,
            FeatureSeeder::class,
            FeedbackSeeder::class,
            TeamSeeder::class,
            BlogSeeder::class,
        ]);
    }
}

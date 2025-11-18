<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'image' =>  '1.png',
                'name'  =>  ['en' => 'HVAC Installation', 'ar' => 'HVAC Installation'],
                'notes' =>  ['en' => 'Lorem ipsum is simply free text available in market wesbites.', 'ar' => 'Lorem ipsum is simply free text available in market wesbites.']
            ],
            [
                'image' =>  '2.png',
                'name'  =>  ['en' => 'Duct Repairing', 'ar' => 'Duct Repairing'],
                'notes' =>  ['en' => 'Lorem ipsum is simply free text available in market wesbites.', 'ar' => 'Lorem ipsum is simply free text available in market wesbites.']
            ],
            [
                'image' =>  '3.png',
                'name'  =>  ['en' => 'Indoor Air Quality', 'ar' => 'Indoor Air Quality'],
                'notes' =>  ['en' => 'Lorem ipsum is simply free text available in market wesbites.', 'ar' => 'Lorem ipsum is simply free text available in market wesbites.']
            ],
            [
                'image' =>  '4.png',
                'name'  =>  ['en' => 'Geo Thermal System', 'ar' => 'Geo Thermal System'],
                'notes' =>  ['en' => 'Lorem ipsum is simply free text available in market wesbites.', 'ar' => 'Lorem ipsum is simply free text available in market wesbites.']
            ],
        ];
        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}

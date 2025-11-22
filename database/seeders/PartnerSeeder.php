<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'image' => '1.png',
                'name'  => 'Air Conditioner Maintenance',
            ],
            [
                'image' => '2.png',
                'name'  => 'Ventilation Solutions',
            ],
            [
                'image' => '3.png',
                'name'  => 'Ventilation Solutions',
            ],
            [
                'image' => '4.png',
                'name'  => 'Ventilation Solutions',
            ],
            [
                'image' => '5.png',
                'name'  => 'Heating System Repair',
            ],
        ];

        foreach ($items as $item) {
            Partner::create($item);
        }
    }

}

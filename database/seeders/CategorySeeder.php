<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'image' => 'cooling.jpg',
                'name'  => [
                    'ar' => 'أنظمة التبريد',
                    'en' => 'Cooling Systems',
                ],
            ],
            [
                'image' => 'fan-coil.jpg',
                'name'  => [
                    'ar' => 'وحدات فان كويل',
                    'en' => 'Fan Coil Units',
                ],
            ],
            [
                'image' => 'central-ac.jpg',
                'name'  => [
                    'ar' => 'التكييف المركزي',
                    'en' => 'Central Air Conditioning',
                ],
            ],
            [
                'image' => 'ventilation.jpg',
                'name'  => [
                    'ar' => 'أنظمة التهوية',
                    'en' => 'Ventilation Systems',
                ],
            ],
            [
                'image' => 'chillers.jpg',
                'name'  => [
                    'ar' => 'تشيلرات التبريد',
                    'en' => 'Cooling Chillers',
                ],
            ],
        ];
        foreach ($data as $category) {
            Category::create($category);
        }
    }
}

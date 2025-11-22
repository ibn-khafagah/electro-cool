<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'front_image' => 'cooling-front.jpg',
                'category_id' => 1,
                'name'        => [
                    'ar' => 'نظام تبريد احترافي',
                    'en' => 'Professional Cooling System',
                ],
                'short_notes' => [
                    'ar' => 'حل تبريد عالي الكفاءة.',
                    'en' => 'High-efficiency cooling solution.',
                ],
                'notes' => [
                    'ar' => '<p>نظام تبريد كامل يوفر أداءً ممتازًا مع استهلاك منخفض للطاقة.</p>',
                    'en' => '<p>Complete cooling system offering excellent performance with low energy consumption.</p>',
                ],
            ],
            [
                'front_image' => 'fan-coil-front.jpg',
                'category_id' => 2,
                'name'        => [
                    'ar' => 'وحدة فان كويل 2 طن',
                    'en' => '2-Ton Fan Coil Unit',
                ],
                'short_notes' => [
                    'ar' => 'أداء رائع وتوزيع هواء مثالي.',
                    'en' => 'Great performance & perfect air distribution.',
                ],
                'notes' => [
                    'ar' => '<p>مناسبة للمباني السكنية والتجارية وتوفر تبريد مستقر وهادئ.</p>',
                    'en' => '<p>Suitable for residential and commercial use with stable and quiet cooling.</p>',
                ],
            ],
        ];

        foreach ($data as $product) {
            Product::create($product);
        }
    }
}

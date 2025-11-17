<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'name'  =>  ['en' => 'Future Home', 'ar' => 'بيت المستقبل'],
            'logo'  =>  'logo.png',
            'favicon'  =>  'favicon.png',
            'bg'  =>  'bg.jpg',
            'phone'        => '+201234567890',
            'phone1'        => '+201234567890',
            'email'        => 'info@futurehouse.com',
            'email1'        => 'info@futurehouse.com',
            'opening_hour' => '9:00 AM - 6:00 PM',

            'address'      => [
                'en' => 'New Cairo, Egypt',
                'ar' => 'القاهرة الجديدة، مصر',
            ],
            'notes'      => [
                'en' => 'You can dream, create, design, and build the most wonderful place in the world with Future House.',
                'ar' => 'تقدر أن تحلم، وتُبدع، وتُصمّم، وتبني أجمل مكان في العالم مع بيت المستقبل.',
            ],
            'location'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7292333.929506382!2d36.16691052711701!3d26.817363433546877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14368976c35c36e9%3A0x2c45a00925c4c444!2z2YXYtdix!5e0!3m2!1sar!2seg!4v1759631900363!5m2!1sar!2seg',
            'facebook'     => 'https://www.facebook.com/futurehouse',
            'x'            => 'https://x.com/futurehouse',
            'instagram'    => 'https://www.instagram.com/futurehouse',
            'linkedin'     => 'https://www.linkedin.com/company/futurehouse',
            'snapchat'     => 'https://www.snapchat.com/add/futurehouse',
            'tiktok'       => 'https://www.tiktok.com/@futurehouse',
            'whatsapp'     => 'https://wa.me/201234567890',
        ]);
    }
}

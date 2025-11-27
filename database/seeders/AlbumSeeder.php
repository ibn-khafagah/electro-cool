<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\AlbumImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albums =   [
            'album 1',
            'album 2',
            'album 3',
            'album 4',
            'album 5',
            'album 6',
        ];
        $images =   [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
        ];
        foreach ($albums as $album) {
            Album::create([
                'name' => $album,
            ]);
        }
        foreach (album::all() as $album) {
            foreach ($images as $image) {
                AlbumImages::create([
                    'album_id' => $album->id,
                    'image' => $image,
                    'name'  =>  ['en' => $album->id, 'ar' => $album->id],
                ]);
            }
        }


    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AlbumImages extends Model
{
    use HasFactory, HasTranslations;

    Public $translatable = ['name'];
    protected $guarded = [];

    public function album()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
}

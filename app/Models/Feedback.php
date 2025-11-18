<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Feedback extends Model
{
    use HasFactory, HasTranslations;

    Public $translatable = ['name', 'notes', 'job'];
    protected $guarded = [];
}

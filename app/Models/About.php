<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory, HasTranslations;

    Public $translatable = ['name', 'sub_title', 'title', 'notes', 'check1', 'check2', 'check3', 'check4', 'check1_notes', 'check2_notes', 'check3_notes', 'check4_notes'];
    protected $guarded = [];
}

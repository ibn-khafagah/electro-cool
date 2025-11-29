<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomePage extends Model
{
    use HasFactory, HasTranslations;

    Public $translatable = ['service_sub_title','service_title','counter_sub_title','counter_title','fun1','fun2','fun3','fun4','why_sub_title','why_title','why_notes','why_option1','why_option2','why_option3','why_progress_number_title1','why_progress_number_title2','why_progress_main_title','service_future_sub_title','service_future_title','service_future_notes','book_service_title','book_service_notes','feedback_sub_title','feedback_title','cll_to_action_title','team_sub_title','team_title','contact_sub_title','contact_title','cll_to_action_main_title','blog_sub_title','blog_title',];
    protected $guarded = [];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->text('service_sub_title')->nullable();
            $table->text('service_title')->nullable();
            $table->text('counter_sub_title')->nullable();
            $table->text('counter_title')->nullable();
            $table->text('fun1')->nullable();
            $table->text('fun2')->nullable();
            $table->text('fun3')->nullable();
            $table->text('fun4')->nullable();
            $table->text('why_image')->nullable();
            $table->text('why_sub_title')->nullable();
            $table->text('why_title')->nullable();
            $table->text('why_notes')->nullable();
            $table->text('why_option1')->nullable();
            $table->text('why_option2')->nullable();
            $table->text('why_option3')->nullable();
            $table->text('why_progress_number1')->nullable();
            $table->text('why_progress_number2')->nullable();
            $table->text('why_progress_number_title1')->nullable();
            $table->text('why_progress_number_title2')->nullable();
            $table->text('why_progress_main_title')->nullable();
            $table->text('service_future_sub_title')->nullable();
            $table->text('service_future_title')->nullable();
            $table->text('service_future_notes')->nullable();
            $table->text('book_service_image')->nullable();
            $table->text('book_service_title')->nullable();
            $table->text('book_service_notes')->nullable();
            $table->text('feedback_sub_title')->nullable();
            $table->text('feedback_title')->nullable();
            $table->text('cll_to_action_title')->nullable();
            $table->text('cll_to_action_video')->nullable();
            $table->text('team_sub_title')->nullable();
            $table->text('team_title')->nullable();
            $table->text('contact_sub_title')->nullable();
            $table->text('contact_title')->nullable();
            $table->text('cll_to_action_main_title')->nullable();
            $table->text('blog_sub_title')->nullable();
            $table->text('blog_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};

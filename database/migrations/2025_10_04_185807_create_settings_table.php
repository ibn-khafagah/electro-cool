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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('bg')->nullable();
            $table->string('phone')->nullable();
            $table->text('notes')->nullable();
            $table->string('phone1')->nullable();
            $table->string('email')->nullable();
            $table->string('email1')->nullable();
            $table->string('opening_hour')->nullable();
            $table->string('address')->nullable();
            $table->longText('location')->nullable();
            $table->text('facebook')->nullable();
            $table->text('x')->nullable();
            $table->text('instagram')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('snapchat')->nullable();
            $table->text('tiktok')->nullable();
            $table->text('whatsapp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

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
        Schema::create('chef', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(null);
            $table->string('designation')->nullable(null);
            $table->string('imgpath')->nullable(null);
            $table->string('instaurl')->nullable(null);
            $table->string('facebookurl')->nullable(null);
            $table->string('twitterurl')->nullable(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chef');
    }
};

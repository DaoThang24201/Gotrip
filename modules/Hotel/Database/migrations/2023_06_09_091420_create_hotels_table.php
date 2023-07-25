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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->integer('deal_id');
            $table->integer('popular_filter_id');
            $table->integer('amenity_id');
            $table->integer('guest_rating_id');
            $table->integer('style_id');
            $table->integer('neighbor_id');
            $table->integer('room_id');
            $table->string('title');
            $table->string('type');
            $table->string('city');
            $table->string('region');
            $table->integer('night');
            $table->integer('adult');
            $table->integer('price');
            $table->integer('tax');
            $table->longText('overview');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};

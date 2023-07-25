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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('other_id');
            $table->integer('duration_id');
            $table->integer('language_id');
            $table->string('title');
            $table->integer('hour');
            $table->integer('day');
            $table->string('place');
            $table->string('safety');
            $table->integer('price');
            $table->integer('review');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};

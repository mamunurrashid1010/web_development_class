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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->text('short_desc');
            $table->longText('long_desc');
            $table->float('fee')->default(0);
            $table->integer('total_seat')->default(0);
            $table->string('schedule')->nullable();
            $table->unsignedBigInteger('trainer_id');
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

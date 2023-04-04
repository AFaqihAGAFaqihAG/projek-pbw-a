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
        Schema::create('laptop_information', function (Blueprint $table) {
            $table->integer('id');
            $table->string('brand');
            $table->string('model');
            $table->integer('price');
            $table->string('processor');
            $table->string('memory');
            $table->string('storage');
            $table->string('display_size');
            $table->string('graphics');
            $table->string('operating_system');
            $table->integer('weight');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptop_information');
    }
};

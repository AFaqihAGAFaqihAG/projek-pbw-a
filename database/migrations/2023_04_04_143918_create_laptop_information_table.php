<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Note :
     * price is in integer value, without , or .
     * eg : 10.000.000 is invalid, use 10000000
     * weight is integer converted to gram
     * weight = 1020 => 1020 gram = 1.02 kg
     */
    public function up(): void
    {
        Schema::create('laptop_information', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->integer('price');
            $table->string('processor');
            $table->string('ram');
            $table->string('storage');
            $table->string('display_size');
            $table->string('port');
            $table->string('operating_system');
            $table->integer('weight');
            $table->text('description')->nullable();
            $table->text('image_path')->nullable();
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard;

class LaptopInformation extends Model
{
    use HasFactory;
    public $table = "laptop_information";

    // add the image column to the $fillable array
    // protected $fillable = ['brand', 'model', 'price', 'processor', 'memory', 'storage', 'display_size', 'operating_system', 'weight', 'description', 'image_path'];

    protected $guarded = [];

}

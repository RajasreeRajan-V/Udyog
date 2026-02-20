<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    /** @use HasFactory<\Database\Factories\AboutUsFactory> */
    use HasFactory;
    protected $fillable = [
        'heading',
        'title',
        'description',
        'tagline',
        'person1_image',
        'person1_name',
        'person1_position',
        'person2_image',
        'person2_name',
        'person2_position',
    ];
}

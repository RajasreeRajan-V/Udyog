<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    /** @use HasFactory<\Database\Factories\CareerApplicationFactory> */
    use HasFactory;
    protected $fillable = [
        'career_id',
        'full_name',
        'phone_number',
        'email_address',
        'resume',
    ];
    public function career()
{
    return $this->belongsTo(Career::class);
}

}

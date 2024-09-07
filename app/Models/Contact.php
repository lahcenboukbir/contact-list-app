<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory; // Enables Laravel's model factory for seeding/testing

    // Fields that can be mass assigned
    protected $fillable = [
        'name',           // Contact's name
        'phone_number',   // Contact's phone number
        'email',          // Contact's email (optional)
        'address'         // Contact's address (optional)
    ];
}

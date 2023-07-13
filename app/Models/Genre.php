<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // Fillable fields, to prevent mass assignment
    protected $fillable = [
        'name',
    ];
}

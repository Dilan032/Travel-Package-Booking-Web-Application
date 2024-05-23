<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // define table in database
    protected $table = 'blogs';

    protected $fillable = [
        'title', 'discription', 'image',
    ];
}

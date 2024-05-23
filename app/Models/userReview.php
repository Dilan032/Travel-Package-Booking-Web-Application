<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userReview extends Model
{
    use HasFactory;

     // define table in database
     protected $table = 'user_revies';

     protected $fillable = [
         'user_name', 'user_counrty', 'user_discription', 
     ];
}

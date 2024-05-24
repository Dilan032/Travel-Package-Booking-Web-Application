<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class booking extends Model
{
    use HasFactory;

    // DB table name
    protected $table = 'bookings';

    protected $fillable = [
        'package_name',
        'user_id',
        
        'date',
        'number_of_adult',
        'number_of_child',
        'aditional_requarement',
        'total_fee',
    ];


    // public function user(): BelongsTo{
    //     return $this->belongsTo(User::class);
    // }

}

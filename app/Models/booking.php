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
        'package_id',   
        'date',
        'number_of_adult',
        'number_of_child',
        'pick_up_location',
        'pick_up_location_details',
        'accommodation_type',
        'transport_method',
        'aditional_requarement',
        'total_fee',
    ];


    public function user()
    {
        return $this->belongsTo(User::class); // Belongs to the User model
    }

    public function package()
    {
        return $this->belongsTo(TravelPackage::class); // Belongs to the TravelPackage model
    }

    //for get two table data
    public function scopeWithUserAndPackage($query)
    {
        return $query->with('user', 'package'); // Eager load user and package
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    // DB table name
    protected $table = 'bookings';

    protected $fillable = [
        'travel_packages_id',
        'date',
        'number_of_adult',
        'number_of_child',
        'aditional_requarement',
        'total_fee',
    ];

     // Define the relationship with the TourPackage model
     public function travelPackages()
     {
         return $this->belongsTo(TravelPackage::class, 'package_name');
     }

}

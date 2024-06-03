<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travelPackage extends Model
{
    use HasFactory;

    // DB table name
    protected $table = 'travel_packages';

    protected $fillable = [
            'package_name',
            'image_1',
            'image_2',
            'image_3',
            'duration',
            'tour_type',
            'price_start_from',
            'overview',
            'included_things',
            'Excludes_things',
            'tour_plane_description',
            'per_adult_fee', 
            'per_child_fee', 
    ];

      // Optionally, specify the attributes that should be cast to native types
      protected $casts = [
        'price_start_from' => 'decimal:2',
        'per_adult_fee' => 'decimal:2',
        'per_child_fee' => 'decimal:2',
    ];

}

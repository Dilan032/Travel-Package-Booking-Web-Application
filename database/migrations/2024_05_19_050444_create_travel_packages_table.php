<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('duration');
           
            $table->string('tour_type');
            $table->decimal('price_start_from', 10,2);
            $table->longText('overview');
            $table->longText('included_things');
            $table->longText('Excludes_things');
            $table->longText('tour_plane_description');
            $table->decimal('per_adult_fee', 10,2)->default(200.00);
            $table->decimal('per_child_fee', 10,2)->default(100.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_packages');
    }
};

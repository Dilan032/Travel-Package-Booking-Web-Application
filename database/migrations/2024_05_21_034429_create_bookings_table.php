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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('travel_package_id');
            $table->date('date');
            $table->integer('number_of_adult');
            $table->integer('number_of_child');
            $table->text('aditional_requarement')->nullable();
            $table->decimal('total_fee', 8, 2);
            $table->timestamps();

            // Adding the foreign key constraint
            $table->foreign('travel_package_id')->references('id')->on('travel_packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};

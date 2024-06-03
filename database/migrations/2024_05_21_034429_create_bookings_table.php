<?php

use App\Models\User;
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
            // $table->foreignId('user_id')->constrained();
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->foreignId('package_id')->constrained('travel_packages', 'id');

            $table->date('date');
            $table->integer('number_of_adult');
            $table->integer('number_of_child');
            $table->string('pick_up_location');
            $table->longText('pick_up_location_details');
            $table->decimal('total_fee', 8, 2);
            $table->timestamps();

            $table->string('reservation_status')->default('pending');
            $table->string('invoice_status')->default('pending');
            $table->string('payment_status')->default('pending');
            $table->string('payment_receipt ')->nullable();



            
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

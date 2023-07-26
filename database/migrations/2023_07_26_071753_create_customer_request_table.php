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
        Schema::create('customer_request', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('request_type'); 
            $table->string('hotel_type')->nullable();
            $table->date('flight_date')->nullable();
            $table->string('from_airport')->nullable(); 
            $table->string('to_airport')->nullable();
            $table->string('shuttle')->nullable();
            $table->string('additional_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_request');
    }
};

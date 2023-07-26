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
        Schema::create('private_tours', function (Blueprint $table) {
            $table->id();
            $table->string('tour_name');  
            $table->string('tour_type');  
            $table->text('description'); 
            $table->float('price'); 
            $table->date('start_date');  
            $table->date('end_date');  
            $table->string('location');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('private_tours');
    }
};

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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('car_id');
            $table->dateTime('start_date_period');
            $table->dateTime('final_date_expected_period');
            $table->dateTime('end_date_realized_period');
            $table->float('daily_value', 8,2);
            $table->integer('initial_km');
            $table->integer('final_km');
            $table->timestamps();
    
            //foreign key (constraints)
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};

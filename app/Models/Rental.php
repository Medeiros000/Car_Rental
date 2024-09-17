<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'costumer_id',
        'car_id',
        'start_date_period',
        'final_date_expected_period',
        'end_date_realized_period',
        'daily_value',
        'initial_km',
        'final_km',
    ];

    public function costumer()
    {
        return $this->belongsTo(Costumer::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}

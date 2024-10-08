<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
  use HasFactory;

  protected $fillable = [
    'brand_id',
    'name',
    'image',
    'doors_number',
    'seats',
    'air_bag',
    'abs'
  ];

  /**
   * Summary of brand
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function brand()
  {
    return $this->belongsTo(Brand::class);
  }
}

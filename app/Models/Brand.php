<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  use HasFactory;
  protected $fillable = [
    'name',
    'image'
  ];

  /**
   * Summary of models
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function car_models()
  {
    return $this->hasMany(CarModel::class);
  }
}

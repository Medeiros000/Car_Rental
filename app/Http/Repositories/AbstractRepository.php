<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{

  protected $model;

  public function __construct(Model $model)
  {
    $this->model = $model;
  }

  public function selectAttributesRelationship($attributes)
  {
    $this->model = $this->model->with($attributes);
  }

  public function filter($filter)
  {
    $conditions = explode(';', $filter);
    foreach ($conditions as $condition) {
      $c = explode(':', $condition);
      $this->model = $this->model->where($c[0], $c[1], $c[2]);
    }
  }

  public function selectAttributes($attributes)
  {
    $attributes = explode(',', $attributes);
    $this->model = $this->model->select($attributes);
  }

  public function getResults()
  {
    return $this->model->get();
  }
}

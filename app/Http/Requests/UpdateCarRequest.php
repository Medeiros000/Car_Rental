<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    if ($this->isMethod('put')) {
      return $this->putRules();
    } elseif ($this->isMethod('patch')) {
      return $this->patchRules();
    }
    return [];
  }

  /**
   * Get the validation rules for PUT requests.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  protected function putRules(): array
  {
    return [
      'car_model_id' => ['required', 'exists:car_models,id', 'integer'],
      'plate' => ['required', 'unique:cars,plate', 'min:7'],
      'available' => ['required', 'boolean'],
      'km' => ['required', 'integer'],
    ];
  }

  /**
   * Get the validation rules for PATCH requests.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  protected function patchRules(): array
  {
    return [
      'car_model_id' => ['sometimes', 'exists:car_models,id', 'integer'],
      'plate' => ['sometimes', 'unique:cars,plate', 'min:7'],
      'available' => ['sometimes', 'boolean'],
      'km' => ['sometimes', 'integer'],
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array<string, string>
   */
  public function messages(): array
  {
    return [
      'car_model_id.required' => 'Car model is required',
      'car_model_id.exists' => 'Car model must exist',
      'car_model_id.integer' => 'Car model must be an integer',
      'plate.required' => 'Plate is required',
      'plate.unique' => 'Plate must be unique',
      'plate.min' => 'Plate must have at least 7 characters',
      'available.required' => 'Available is required',
      'available.boolean' => 'Available must be a boolean',
      'km.required' => 'Km is required',
      'km.integer' => 'Km must be a number',
    ];
  }
}

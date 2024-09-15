<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarModelRequest extends FormRequest
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
      'brand_id' => ['required', 'exists:brands,id'],
      'name' => ['required', 'unique:car_models,name,' . $this->route('car_model'), 'min:3'],
      'image' => ['required', 'file', 'mimes:png,jpeg,jpg'],
      'doors_number' => ['required', 'integer', 'between:1,5'],
      'seats' => ['required', 'integer', 'between:1,20'],
      'air_bag' => ['required', 'boolean'],
      'abs' => ['required', 'boolean'],
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
      'brand_id' => ['sometimes', 'exists:brands,id'],
      'name' => ['sometimes', 'unique:car_models,name,' . $this->route('car_model'), 'min:3'],
      'image' => ['sometimes', 'file', 'mimes:png,jpeg,jpg'],
      'doors_number' => ['sometimes', 'integer', 'between:1,5'],
      'seats' => ['sometimes', 'integer', 'between:1,20'],
      'air_bag' => ['sometimes', 'boolean'],
      'abs' => ['sometimes', 'boolean'],
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
      'brand_id.required' => 'Brand is required',
      'brand_id.exists' => 'Brand not found',
      'name.required' => 'Name is required',
      'name.unique' => 'Name already exists',
      'name.min' => 'Name must be at least 3 characters',
      'image.required' => 'Image is required',
      'image.file' => 'Image must be a file',
      'image.mime' => 'Image must be a png, jpeg, or jpg',
      'doors_number.required' => 'Doors number is required',
      'doors_number.integer' => 'Doors number must be an integer',
      'doors_number.between' => 'Doors number must be between 1 and 5 digits',
      'seats.required' => 'Seats is required',
      'seats.integer' => 'Seats must be an integer',
      'seats.between' => 'Seats must be between 1 and 20 digits',
      'air_bag.required' => 'Air bag is required',
      'air_bag.boolean' => 'Air bag must be a boolean',
      'abs.required' => 'ABS is required',
      'abs.boolean' => 'ABS must be a boolean',
    ];
  }
}

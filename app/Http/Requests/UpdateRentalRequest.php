<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRentalRequest extends FormRequest
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

  public function putRules(): array
  {
    return [
      'costumer_id' => ['required', 'exists:costumers,id'],
      'car_id' => ['required', 'exists:cars,id'],
      'start_date_period' => ['required'],
      'final_date_expected_period' => ['required'],
      'daily_value' => ['required'],
      'initial_km' => ['required'],
      'final_km' => ['required'],
    ];
  }

  public function patchRules(): array
  {
    return [
      'costumer_id' => ['sometimes', 'exists:costumers,id'],
      'car_id' => ['sometimes', 'exists:cars,id'],
      'start_date_period' => ['sometimes'],
      'final_date_expected_period' => ['sometimes'],
      'daily_value' => ['sometimes'],
      'initial_km' => ['sometimes'],
      'final_km' => ['sometimes'],
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
      'costumer_id.required' => 'The costumer_id is required',
      'costumer_id.integer' => 'The costumer_id must be an integer',
      'car_id.required' => 'The car_id is required',
      'car_id.integer' => 'The car_id must be an integer',
      'start_date_period.required' => 'The start_date_period is required',
      'start_date_period.date' => 'The start_date_period must be a date',
      'final_date_expected_period.required' => 'The final_date_expected_period is required',
      'final_date_expected_period.date' => 'The final_date_expected_period must be a date',
      'daily_value.required' => 'The daily_value is required',
      'daily_value.numeric' => 'The daily_value must be a number',
      'initial_km.required' => 'The initial_km is required',
      'initial_km.numeric' => 'The initial_km must be a number',
      'final_km.required' => 'The final_km is required',
      'final_km.numeric' => 'The final_km must be a number',
    ];
  }
}

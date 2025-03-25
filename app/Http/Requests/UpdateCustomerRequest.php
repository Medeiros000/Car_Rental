<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
      'name' => ['required', 'string', 'min:3'],
      'email' => ['required', 'email', 'unique:customers,email'],
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
      'name' => ['sometimes', 'string', 'min:3'],
      'email' => ['sometimes', 'email', 'unique:customers,email'],
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
      'name.string' => 'Name must be a string',
      'email.email' => 'Email must be a valid email',
    ];
  }
}

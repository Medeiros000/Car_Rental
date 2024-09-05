<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
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
            'name' => ['required', 'unique:brands,name,' . $this->route('brand'), 'min:3'],
            'image' => ['required', 'file', 'mimes:png'],
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
            'name' => ['sometimes', 'unique:brands,name,' . $this->route('brand'), 'min:3'],
            'image' => ['sometimes', 'file', 'mimes:png'],
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
            'name.required' => 'Name is required',
            'name.unique' => 'Name must be unique',
            'name.min' => 'Name must have at least 3 characters',
            'image.required' => 'Image is required',
            'image.file' => 'Image must be a file',
            'image.mimes' => 'Image must be a png file',
        ];
    }
}

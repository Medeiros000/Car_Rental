<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
        return [
            'name' => ['required', 'unique:brands', 'min:3'],
            'image' => ['required', 'file', 'mimes:png', 'max:2048'],	// 2MB
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
            'image.max' => 'Image must be less than 2MB',
        ];
    }
}

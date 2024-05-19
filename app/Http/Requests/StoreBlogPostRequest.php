<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'blogTitle' => 'required|string|max:255',
            'description' => 'required|string',
            'blogImage' => 'required|image|mimes:jpeg,svg,png,jpg,gif|max:10,240', // Ensure image file, max 10MB
        ];
    }
}

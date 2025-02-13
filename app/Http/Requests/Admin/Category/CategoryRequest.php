<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $imageRule = $this->isMethod("POST") ? "required" : "nullable";
        return [
            "name" => "required|string|min:3|max:30|unique:categories,name",
            "main_image" => "$imageRule|image|mimes:png,jpg,jpeg,gif",
        ];
    }
}

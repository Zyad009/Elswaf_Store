<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "name" => "required|min:3|max:50",
            "price" => "required|numeric|min:0",
            "offer" => "required|numeric|min:0",
            "QTY" => "required|string",
            "description" => "required|string|min:15|max:500",
            "image" => "$imageRule|image|mimes:png,jpg,jpeg,gif",
            "category_id" => "required",
        ];
    }
}

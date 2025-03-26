<?php

namespace App\Http\Requests\Admin\Editor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEditorRequest extends FormRequest
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
            "name" => "required|string|min:3|max:50",
            "email" => "required|email|string",
            "address" => "required|string|min:15|max:255",
            "salary" => "required|integer|min:1000|max:100000",


            "phone" => "required|string|unique:admins|regex:/^\+?[0-9-]+$/",
            "whatsapp" => "required|string|unique:admins|regex:/^\+?[0-9-]+$/",

            "gender" => "required|string|in:male,female",
            "password" => "required|string|min:6|confirmed",
        ];
    }
}

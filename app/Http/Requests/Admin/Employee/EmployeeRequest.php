<?php

namespace App\Http\Requests\Admin\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeRequest extends FormRequest
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
            "email" => ["required","string","email",
                Rule::unique("employees" , "email")->ignore($this->route("employee"))
        ],
            "address" => "required|string|min:15|max:255",

            "salary" => "required|numeric|min:1000|max:100000",

            "phone" => "required|string|unique:admins|regex:/^\+?[0-9\s\-\(\)]{10,20}$/",
            "whatsapp" => "required|string|unique:admins|regex:/^\+?[0-9\s\-\(\)]{10,20}$/",

            "gender" => "required|string|in:male,female",
            "main_image" => "nullable|image|mimes:png,jpg,jpeg,gif|max:2048",

            "branch_id" => "required|exists:branches,id",
            "password" => "required|string|confirmed|min:6|max:50",
        ];
    }
}

<?php

namespace App\Http\Requests\Admin\Editor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use RealRashid\SweetAlert\Facades\Alert;

class EditorRequest extends FormRequest
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
            "name"=>"required|string|min:3|max:50",
            "email"=>"required|email|string|unique:admins",
            "password"=>"required|string|min:6|confirmed",
            "branch_id" => "required|exists:branches,id",
        ];
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     alert()->error("Error!", "Data verification failed");

    //     throw new HttpResponseException(
    //         back()->withErrors($validator)->withInput()
    //     );
    // }
}

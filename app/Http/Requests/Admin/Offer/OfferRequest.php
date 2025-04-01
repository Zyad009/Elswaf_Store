<?php

namespace App\Http\Requests\Admin\Offer;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'code' => ["required","string","max:255",
            Rule::unique("offers" , "code")->ignore(request()->route("offer"))],
            'discount_type' => 'required|in:percentage,value',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'discount' => [
                'required',
                'numeric',
                'min:1',
                $this->input('discount_type') === 'percentage' ? 'max:100' : '',
            ],
        ];
    }
}

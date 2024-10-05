<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password as RulesPassword;

class RegisterRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'string',
                'email',
                //'unique:users,email'
            ],
            /*
            required, min 8, max 12, uppercase, lowercase, special char, numeric, weak, letters, confirmed
            */
            'password' => [
                'required',
                // 'min:8',
                // 'max:12',
                RulesPassword::min(8)
                    ->max(20)
                    ->mixedCase()
                    ->symbols()
                    ->numbers()
                    ->uncompromised()
                    ->letters(),
                'confirmed'
            ],
            'avatar' => [
                'nullable',
                'file'
            ],
            // 'id' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'password.confirmed' => "This is a customer error message"
        ];
    }
    protected function prepareForValidation()
    {
        // $this->merge(['id' => Auth::user()->id]);
    }
}

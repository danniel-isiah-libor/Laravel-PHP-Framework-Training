<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

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
            //

            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'string',
                // 'unique:table_name,column_name',
                'email'
            ],
            'password' => [
                'required',
                Password::min(8)
                    ->max(12)
                    ->mixedCase()
                    ->symbols()
                    ->numbers()
                    ->uncompromised()
                    ->letters(),
                'confirmed',
                // 'string',
                // 'min:8', // Minimum of 8 characters
                // 'regex:/[a-z]/', // At least one lowercase letter
                // 'regex:/[A-Z]/', // At least one uppercase letter
                // 'regex:/[0-9]/', // At least one digit
                // 'regex:/[@$!%*?&]/' // At least one special character
            ]
        ];
    }
    public function messages()
    {
        return [
            'password.confirmed' => 'This is a custom error message'
        ];
    }
}

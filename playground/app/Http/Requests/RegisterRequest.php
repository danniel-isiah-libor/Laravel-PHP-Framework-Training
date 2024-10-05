<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
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
            'name' => [
                'required',
                'string',
                'max:225',
            ],
            'email' => [
                'required',
                'email',
                // 'unique:' . User::class,
                // 'unique:users,email',
            ],
            'password' => [
                'required',
                // Password::min(8)
                //     ->max(20)
                //     ->mixedCase()
                //     ->symbols()
                //     ->numbers()
                //     ->uncompromised()
                //     ->letters(),
                'confirmed',

            ],
            'avatar' => [
                'nullable',
                'file',
            ],
        ];
    }

    /**
     * for custom error messages
     *
     * @return void
     */
    public function messages()
    {
        return [
            'password.confirmed' => 'Confirmation password should match.',
        ];
    }
    protected function prepareForValidation()
    {
        // $this->merge(['id' => Auth::user()->id]);
    }
}

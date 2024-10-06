<?php

namespace App\Http\Requests;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email' /*'unique:users,email'*/],
            'password' => ['required', Password::min(8)->max(12)->mixedCase()->symbols()->numbers()->uncompromised(), 'confirmed'],
            'avatar' => ['nullable','file',]
            // 'id' => ['required']
        ];
    }
    public function messages()
    {
        return[
            'password.confirmed' => "This is a custom message"
        ];
    }
    protected function prepareForValidation()
    {
        // $this->merge(['id' => Auth::user()->id]);
    }
}
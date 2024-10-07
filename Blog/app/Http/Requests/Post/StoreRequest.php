<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => [
                'required',
                'integer',
                'exists:users,id',
            ],
            'title' => [
                'required',
                'string',
                'max:225',
            ],
            'content' => [
                'required',
                'string',
                'max:500',
            ],
        ];
    }

    /**
     * merge the user id to post
     * @return void
     */
    protected function prepareForValidation()
    {
        // dd(request()->all());
        $this->merge([
            'user_id' => Auth::user()->id,
        ]);

    }
}

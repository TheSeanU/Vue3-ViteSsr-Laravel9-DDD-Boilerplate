<?php

declare(strict_types = 1);

namespace App\Domains\Auth\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:25|unique:users',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[-+_!@#$%^&*.,?]).\S*$/',
                'same:confirm_password',
            ],
            'confirm_password' => 'required',
        ];
    }
}

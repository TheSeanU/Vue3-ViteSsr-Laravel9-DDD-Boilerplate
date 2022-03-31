<?php declare(strict_types=1);

namespace App\Domain\Auth\Requests;

class LoginRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'string'],
            'password' => 'required|min:5|max:255',
        ];
    }
}

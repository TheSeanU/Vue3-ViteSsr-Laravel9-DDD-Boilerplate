<?php declare(strict_types=1);

namespace App\Application\Auth\Requests;

class AuthRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => 'required|min:5|max:255',
        ];
    }
}

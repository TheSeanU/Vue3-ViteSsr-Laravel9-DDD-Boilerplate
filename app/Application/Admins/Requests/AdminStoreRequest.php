<?php declare(strict_types = 1);

namespace App\Application\Admins\Requests;

class AdminStoreRequest
{

    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => ['required'],
            'types' => ['required'],
        ];
    }
}

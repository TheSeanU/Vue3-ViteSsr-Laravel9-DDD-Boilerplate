<?php declare(strict_types = 1);

namespace App\Application\Categories\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest 
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
        ];
    }
}
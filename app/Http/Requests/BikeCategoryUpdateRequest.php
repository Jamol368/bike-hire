<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BikeCategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'max:63',
            'slug' => 'unique:shops|max:63',
            'image' => 'max:63',
            'description' => 'max:255',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopUpdateRequest extends FormRequest
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
            'manager' => 'max:63',
            'phone' => 'unique:shops|max:31',
            'address' => 'max:127',
            'latitude' => 'max:31',
            'longitude' => 'max:31',
            'email' => 'unique:shops|email|max:31',
            'description' => 'max:255',
        ];
    }
}

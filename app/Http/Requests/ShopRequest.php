<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:63',
            'slug' => 'required|unique:shops|max:63',
            'image' => 'required|max:63',
            'manager' => 'required|max:63',
            'phone' => 'required|unique:shops|max:31',
            'address' => 'required|max:127',
            'latitude' => 'required|max:31',
            'longitude' => 'required|max:31',
            'email' => 'required|unique:shops|email|max:31',
            'description' => 'required|max:255',
        ];
    }
}

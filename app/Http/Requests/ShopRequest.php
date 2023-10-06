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
            'name' => 'required|max:127',
            'slug' => 'required|unique:shops|max:127',
            'image' => 'required|max:255',
            'manager' => 'required|max:127',
            'phone' => 'required|unique:shops|max:31',
            'address' => 'required|max:255',
            'latitude' => 'max:31',
            'longitude' => 'max:31',
            'email' => 'required|unique:shops|email|max:63',
            'description' => 'required|max:511',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ShopUpdateRequest extends FormRequest
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
            'name' => 'max:127',
            'slug' => 'unique:shops|max:127',
            'image' => 'max:255',
            'manager' => 'max:127',
            'phone' => ['max:31', Rule::unique('shops', 'phone')
                ->ignore($this->shop->id)],
            'address' => 'max:255',
            'latitude' => 'max:31',
            'longitude' => 'max:31',
            'email' => 'unique:shops|email|max:63',
            'description' => 'max:511',
        ];
    }
}

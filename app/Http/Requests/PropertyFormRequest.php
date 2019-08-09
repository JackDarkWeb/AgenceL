<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:150'],
            'description' => ['required', 'string'],
            'surface' => ['required', 'numeric'],
            'rooms' => ['required', 'numeric'],
            'bedrooms' => ['required', 'numeric'],
            'floor' => ['required', 'numeric'],
            'heat' => ['required', 'in: 0,1'],
            'price' => ['required', 'numeric'],
            'city' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'sold' => ['in:0,1'],
            'postal_code' => ['required', 'numeric', 'min:5'],
        ];
    }
}

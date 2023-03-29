<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'max: 254',
            ],
            'description' => [
                'required',
                'string',
                'max: 254',
            ],
            'price' => [
                'required',
                'string',
                'max: 254',
            ],
            'image' => [
                'required',
                'image',
                'max: 4096',
            ],
            'brand' => [
                'required',
                'string',
                'max: 254,'
            ],
            'category' => [
                'required',
            ]
        ];
    }
}

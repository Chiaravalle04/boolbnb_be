<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApartmentRequest extends FormRequest
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
            'title' => 'required|unique:apartments,title|max:128',
            'description' => 'required',
            'cover' => 'required|image|max:2048',
            'type' => 'required|string',
            'address' => 'required|string',
            'long' => 'required|is_numeric',
            'lat' => 'required|is_numeric',
            'price' => 'required|gt:50',
            'availability' => 'required|boolean',
            'room' => 'required|gt:0',
            'bed' => 'required|gt:0',
            'bathroom' => 'required|gt:0',
            'square_meters' => 'required|gt:20',
            'visibility' => 'required|boolean',
        ];
    }
}

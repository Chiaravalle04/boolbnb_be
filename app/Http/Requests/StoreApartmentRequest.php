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
            'type' => 'required',
            'address' => 'required',
            'long' => 'required',
            'lat' => 'required',
            'price' => 'required',
            'availability' => 'required',
            'room' => 'required',
            'bed' => 'required',
            'bathroom' => 'required',
            'square_meters' => 'required',
            'visibility' => 'required',
        ];
    }
}

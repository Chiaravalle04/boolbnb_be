<?php

namespace App\Http\Requests;
//Helpers:
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;


class UpdateApartmentRequest extends FormRequest
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
            'title' => [
                'required', 
                Rule::unique('apartments')->ignore($this->apartment->id),
                'max:128'
            ],
            'description' => 'required',
            'cover' => 'required|image|max:2048',
            'type' => 'required|string',
            'address' => 'required|string',
            'latitude' => 'nullable',
            'longitude' => 'nullable',
            'price' => 'required|numeric|gt:20',
            'availability' => 'required|boolean',
            'room' => 'required|gt:0',
            'bed' => 'required|gt:0',
            'bathroom' => 'required|gt:0',
            'square_meters' => 'required|gt:20',
            'visibility' => 'required|boolean',
            'services' => 'nullable|array|exists:services,id',
            'user_id' => 'nullable',
        ];
    }
}

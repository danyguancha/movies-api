<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequestUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['max: 50'],
            'year_release' => ['date'],
            'director' => ['string'],
            'genre' => ['string'],
            'duration' => ['string'],
            'synopsis' => ['string'],
            'language' => ['string'],
            'puntuaction' => ['string'],
            'actors' => ['string'],
            'image' => ['string'],
        ];
    }
}

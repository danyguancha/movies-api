<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequestCreate extends FormRequest
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
            'name' => ['required', 'unique:App\models\Movie,name','max:50'],
            'year_release' => ['required', 'date'],
            'director' => ['required', 'string'],
            'genre' => ['required', 'string'],
            'duration' => ['required'],
            'synopsis' => ['required', 'string'],
            'language' => ['required', 'string'],
            'puntuaction' => ['required', 'string'],
            'actors' => ['required', 'string'],
            'image' => ['required', 'string'],
        ];
    }
}

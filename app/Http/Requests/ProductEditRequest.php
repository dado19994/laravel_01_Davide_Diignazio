<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ];
    }

        public function messages(): array
    {
        return [
            'name.required' => 'Il nome del prodotto è obbligatorio.',
            'name.string' => 'Il nome del prodotto deve essere una stringa.',
            'name.max' => 'Il nome del prodotto non può superare i 255 caratteri.',
            'price.required' => 'Il prezzo del prodotto è obbligatorio.',
            'price.numeric' => 'Il prezzo del prodotto deve essere un numero.',
            'price.min' => 'Il prezzo del prodotto deve essere almeno 0.',
            'description.string' => 'La descrizione del prodotto deve essere una stringa.',
        ];
    }
}

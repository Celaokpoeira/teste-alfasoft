<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Isso libera a validação
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:6', // Maior que 5
            'contact' => 'required|digits:9|unique:contacts,contact', // 9 dígitos e único
            'email' => 'required|email|unique:contacts,email', // E-mail válido e único
        ];
    }
}

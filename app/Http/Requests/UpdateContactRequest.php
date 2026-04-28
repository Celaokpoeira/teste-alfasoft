<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // Pega o ID do contato que está sendo editado
        $contactId = $this->route('contact')->id;

        return [
            'name' => 'required|string|min:6',
            'contact' => 'required|digits:9|unique:contacts,contact,' . $contactId,
            'email' => 'required|email|unique:contacts,email,' . $contactId,
        ];
    }
}

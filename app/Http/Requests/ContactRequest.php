<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'body' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

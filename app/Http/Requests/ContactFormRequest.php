<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:55'],
            'phone' => ['required', 'string'],
            'age' => ['required', 'numeric', 'max:18']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Введите ваше имя',
            'phone.required' => 'Введите ваш телефон',
            'age.required' => 'Введите возраст ребенка',
            'age.max' => 'Введите корректный возраст',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'amount' => ['required', 'numeric', 'max:100000'],
            'name' => ['required', 'string', 'max:55'],
            'phone' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'amount.required' => 'Введите сумму',
            'amount.max' => 'Введите корректную сумму',
            'name.required' => 'Введите имя',
            'phone.required' => 'Введите телефон',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ICOBuyPFTGRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'amount' => 'numeric|min:1', // Обязательно, должно быть числом и больше 0
            'wallet' => 'string|max:255', // Обязательно, строка, максимальная длина 255 символов
        ];
    }

    public function messages()
    {
        return [
            'amount.numeric' => 'Поле "Сумма" должно быть числом.',
            'amount.min' => 'Поле "Сумма" должно быть больше 0.',
            'wallet.string' => 'Поле "Кошелек" должно быть строкой.',
            'wallet.max' => 'Поле "Кошелек" не может превышать 255 символов.',
        ];
    }
}

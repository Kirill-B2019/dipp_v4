<?php

namespace App\Http\Controllers;

use App\Models\SubscribeUser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
class SubscribeUserController extends Controller
{
    public function create(Request $request): ?\Illuminate\Http\RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribe_users,email',
        ], [
            'email.required' => 'Поле email обязательно для заполнения.',
            'email.email' => 'Пожалуйста, введите корректный адрес электронной почты.',
            'email.unique' => 'Этот адрес электронной почты уже зарегистрирован.',
        ]);


        if ($validator->fails()) {
            $message = $validator->errors()->first();
            Swal::fire([
                'title' => 'Ошибка адреса',
                'text' => $message,
                'icon' => 'error',
                'confirmButtonText' => 'Попробовать снова',
                'customClass' => [
                'confirmButton' => 'my-confirm-button' // Задаем кастомный класс для кнопки
            ]
            ]);
            return redirect()->back()->withInput();
        }

        $subscribeUser = new SubscribeUser();
        $subscribeUser->email = $request->input('email');

        try {
            $subscribeUser->save();
            $message = 'Вы успешно подписались на обновления!';

            Swal::fire([
                'title' => $message,
                'icon' => "success",
                'draggable' => true,
                'customClass' => [
                    'confirmButton' => 'my-confirm-button' // Задаем кастомный класс для кнопки
                ]
            ]);

            return redirect()->back()->with('success', $message);
        } catch (\Exception $e) {
            \Log::error('Error subscribing user: ' . $e->getMessage());
            $message = 'Произошла ошибка при подписке на обновления.';
            Swal::fire([
                'title' => 'Упс...',
                'text' => $message,
                'icon' => 'error',
                'confirmButtonText' => 'Еще раз!',
                'customClass' => [
                'confirmButton' => 'my-confirm-button' // Задаем кастомный класс для кнопки
            ]
            ]);
            return redirect()->back()->with('error', $message);
        }
    }

}

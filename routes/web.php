<?php

use App\Http\Controllers\PUblic\MainPageController;
use Illuminate\Support\Facades\Route;


//Публичные ссылки
Route::get('/', [MainPageController::class, 'index'])->name('home');


//Авторизованный пользователь

//Служебные маршруты

//Административные маршруты

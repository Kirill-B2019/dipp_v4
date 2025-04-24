<?php

use App\Http\Controllers\BuyPlatformTokenController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PlatformICOController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscribeUserController;
use Illuminate\Support\Facades\Route;

//Публичные ссылки
Route::get('/home', [MainPageController::class, 'index'])->name('home');

//ico платформы
Route::get('/', [PlatformICOController::class, 'index'])->name('platform_ico');
Route::post('/buy-pftg', [BuyPlatformTokenController::class, 'CreateOrder'])->name('buy_PFTG');
Route::get('/order/{id}', [BuyPlatformTokenController::class, 'ShowOrder'])->name('show_order_PFTG');
Route::patch('/cancel/{id}', [BuyPlatformTokenController::class, 'CancelOrder'])->name('cancel_order_PFTG');
Route::patch('/paid/{id}', [BuyPlatformTokenController::class, 'PaidOrder'])->name('paid_order_PFTG');

//подписка на обновления
Route::post('/subscribe', [SubscribeUserController::class, 'create'])->name('subscribe');

//Служебные маршруты

//Административные маршруты

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//Авторизованный пользователь
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

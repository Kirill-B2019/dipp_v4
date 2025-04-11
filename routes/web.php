<?php

use App\Http\Controllers\BuyPlatformTokenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\MainPageController;
use App\Http\Controllers\Public\PlatformICOController;
use Illuminate\Support\Facades\Route;

//Публичные ссылки
Route::get('/', [MainPageController::class, 'index'])->name('home');

//ico платформы
Route::get('/ico', [PlatformICOController::class, 'index'])->name('platform_ico');
Route::post('/buy-pftg', [BuyPlatformTokenController::class, 'CreateOrder'])->name('buy_PFTG');
Route::get('/order/{id}', [BuyPlatformTokenController::class, 'showOrder'])->name('show_order_PFTG');

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

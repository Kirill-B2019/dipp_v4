<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\MainPageController;
use App\Http\Controllers\Public\PlatformICOController;
use Illuminate\Support\Facades\Route;

//Публичные ссылки
Route::get('/', [MainPageController::class, 'index'])->name('home');


Route::get('/ico', [PlatformICOController::class, 'index'])->name('platform_ico');

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

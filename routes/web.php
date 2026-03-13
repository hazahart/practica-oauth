<?php

use App\Http\Controllers\Auth\SocialAuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/auth/{provider}/redirect', [SocialAuthController::class, 'redirectToProvider'])->name('social.redirect');
Route::get('/auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('social.callback');

Route::get('/dashboard', function () {
    return '¡Has iniciado sesión con éxito! Bienvenido, ' . Auth::user()->name;
})->middleware('auth');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
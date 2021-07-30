<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/br', function () {
    return view('br');
})->name('home');

Route::get('/br/login', [App\Http\Controllers\UserController::class, 'view'])->name('login');

Route::post('/br/login', 'App\Http\Controllers\UserController@loging')->name('loging');

Route::get('/br/logout', 'App\Http\Controllers\UserController@logout')->name('logout');

Route::get('/br/signup/registration', function () {
    return view('register.registration');
})->name('registration');

Route::get('/br/signup/regform', function () {
    return view('register.regform');
})->name('regform');

Route::get('/br/signup/about', function () {
    return view('register.about');
})->name('about');

Route::post('/br/signup/register', 'App\Http\Controllers\UserController@register')->name('register');

Route::get('/browse', 'App\Http\Controllers\BrowseController@construct')->name('browse')->middleware('auth');

Route::get('/YourAccount', function () {
    Log::channel('netflix')->info('Configurações da conta', ['user' => Auth::user()->name, 'time' => date('d:m:s d/m/Y')]);
    return view('youraccount');
})->name('account')->middleware('auth');



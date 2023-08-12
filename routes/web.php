<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::fallback(function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->name('root');

Route::get('/hello-world', function () {
    return "Hello World! How are you doing?";
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post(
    '/register',
    [RegisterController::class, 'register']
)->name('register.user');

Route::get('/login', function () {
    return view('auth.login');
})->name('session.create');

Route::post('/session',
    [SessionsController::class, 'store']
)->name('session.store');

Route::delete('/session',
    [SessionsController::class, 'destroy']
)->name('session.destroy');

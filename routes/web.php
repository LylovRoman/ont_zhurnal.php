<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrepodController;
use App\Http\Controllers\NagruzkaController;
use App\Http\Controllers\UrokiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return \Illuminate\Support\Facades\Redirect::to('/');
});

Route::get('/prepods/get', [PrepodController::class, 'showAll']);

Route::get('/uroki', [UrokiController::class, 'showAll'])->name('uroki');

Route::get('/nagruzka', [NagruzkaController::class, 'showAll'])->name('nagruzka');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotmanController;

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

Route::get('/', function () {
    return view('index');
});
Route::match(['get', 'post'], '/botman', [BotManController::class, "handle"]);

Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/getUserLogin', function() {
	return Auth::user();
})->middleware('auth');

Route::get('/', [ChatController::class, 'index'])->middleware('auth');
Route::get('/messages', [ChatController::class, 'getMessages'])->middleware('auth')->name('get-message');
Route::post('/messages', [ChatController::class, 'sendMessages'])->middleware('auth')->name('send-message');

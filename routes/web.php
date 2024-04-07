<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index\IndexController;
use App\Http\Controllers\send_message\GetSendMessageController;
use App\Http\Controllers\send_message\PostSendMessageController;
use App\Http\Controllers\select_message\GetSelectMessageController;
use App\Http\Controllers\select_message\PostSelectMessageController;

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

Route::get('/', [IndexController::class, 'index'])->name('index'); # Основная страница

Route::get('/send-message', [GetSendMessageController::class, 'sendMessagePage'])->name('send-message'); # Форма отправки сообщения
Route::post('/send-message', [PostSendMessageController::class, 'sendMessage'])->name('post-send-message'); # Отправка сообщения

Route::get('/select-message', [GetSelectMessageController::class, 'selectMessagePage'])->name('select-message'); # Форма получения сообщения
Route::post('/select-message', [PostSelectMessageController::class, 'selectMessage'])->name('post-select-message'); # Получение сообщения
<?php

use App\Http\Controllers\Practices\ComebackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auths\UserRegisterController;

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

Route::name('c.')->group(function() {
    Route::get('/', [ComebackController::class, 'comebacks'])->name('home');
    Route::get('/u-create', [UserRegisterController::class, 'createUser'])->name('u.create');
    Route::get('/err', [UserRegisterController::class, 'errTransaction'])->name('err');
    Route::get('/welcome-mail', [UserRegisterController::class, 'welcomeMail'])->name('goto-mail');
});


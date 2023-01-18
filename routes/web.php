<?php

namespace App\Http\Controllers;

use App\Models\User;
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

Route::get('/', [
    TodoController::class, 'index'
]);

// To create a task
Route::post('/create', [
    TodoController::class, 'store'
])->middleware('auth');

Route::delete('/delete/{task}', [
    TodoController::class, 'destroy'
]);

// To set a task as completed or uncompleted
Route::put('/completed/{task}', [
    TodoController::class, 'complete'
]);

Route::get('/login', [
    UserController::class, 'login'
])->name('login');

Route::get('/register', [
    UserController::class, 'register'
]);

Route::post('/user/create', [
    UserController::class, 'createUser'
]);

Route::get('/logout', [
    UserController::class, 'logout'
]);

Route::post('/user/authenticate', [
    UserController::class, 'authenticate'
]);

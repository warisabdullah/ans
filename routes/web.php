<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('post');
});
Route::post('/save', [PostController::class, 'create'])->name('savePost');
Route::get('/show', [PostController::class, 'show'])->name('showPost');
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::any('/delete/{id}', [PostController::class, 'destroy']);
Route::post('/update', [PostController::class, 'update'])->name('updatePost');

Route::get('/admin', function () {
    return view('registration');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/reg-admin', [AdminController::class, 'create'])->name('saveAdmin');
Route::post('/login-admin', [AdminController::class, 'index'])->name('loginAdmin');

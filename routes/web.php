<?php

use Illuminate\Support\Facades\Route;
// panggil nama controller
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function(){
    return view('auth.login');
});

Auth::routes();
// ketika ada yg akses register berupa method get dan post akan redirect login
Route::match(["GET", "POST"], "/register", function(){
    return redirect("/login");
})->name("register");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("users", UserController::class);
Route::get('/categories/trash', [CategoryController::class, 'trash'])->name('categories.trash');
Route::get('/categories/{id}/restore', [CategoryController::class, 'restore'])->name('categories.restore');
Route::resource('categories', CategoryController::class);
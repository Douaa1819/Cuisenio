<?php
use App\Http\Controllers\ThemeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngrediantController;
use App\Http\Controllers\UserAccesController;
use Illuminate\Support\Facades\Route;


Route::post('/Theme', [ThemeController::class, 'store'])->name('themes.store');
Route::post('/ingrediants', [IngrediantController::class, 'store'])->name('ingrediants.store');
Route::delete('/ingrediants/{id}', [IngrediantController::class, 'destroy'])->name('ingrediants.destroy');
Route::get('/ingrediants', [IngrediantController::class, 'see'])->name('ingrediants.index');
Route::get('/Theme', [ThemeController::class, 'see'])->name('Theme.index');


Route::put('/ingrediants/{ingrediant}', [IngrediantController::class, 'update'])->name('ingredians.update');
Route::put('/Theme/{theme}', [ThemeController::class, 'update'])->name('themes.update');

Route::delete('/Theme/{id}', [ThemeController::class, 'destroy'])->name('themes.destroy');


Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/register', [CustomAuthController::class, 'register']);
Route::get('/login', [CustomAuthController::class, 'login']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/Ingrediants', [IngrediantController::class, 'index'])->name('ingredinats');
Route::get('/user-acces', [UserAccesController::class, 'index'])->name('user');

Route::get('/home', function () {
    return view('client.readMore');

   


Route::resource('dashboard', AdminController::class);});
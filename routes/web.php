<?php
use App\Http\Controllers\ThemeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('visitor.index');
})->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/register', [CustomAuthController::class, 'register']);
Route::get('/login', [CustomAuthController::class, 'login']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');


Route::get('/home', function () {
    return view('client.readMore');




Route::resource('themes', ThemeController::class);
Route::resource('dashboard', AdminController::class);});
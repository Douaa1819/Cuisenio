<?php
use App\Http\Controllers\ThemeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('visitor.index');
})->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::get('/home', function () {
    return view('client.readMore');




Route::resource('themes', ThemeController::class);
Route::resource('dashboard', AdminController::class);});
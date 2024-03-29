<?php
use App\Http\Controllers\ThemeController;

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.blog');
})->name('blog');

Route::get('/home', function () {
    return view('client.index');
})->name('home');
Route::resource('themes', ThemeController::class);
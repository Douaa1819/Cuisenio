<?php

use App\Http\Controllers\ThemeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngrediantController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserAccesController;
use Illuminate\Support\Facades\Route;
use Spatie\Newsletter\Facades\Newsletter;

//--------------------------Themes------------------------------------------//
Route::get('/Theme', [ThemeController::class, 'see'])->name('Theme.index');
Route::post('/Theme', [ThemeController::class, 'store'])->name('themes.store');
Route::put('/Theme/{theme}', [ThemeController::class, 'update'])->name('themes.update');
Route::delete('/Theme/{id}', [ThemeController::class, 'destroy'])->name('themes.destroy');


//--------------------------Ingrediants------------------------------------------//
Route::get('/ingrediants', [IngrediantController::class, 'see'])->name('ingrediants.index');
Route::post('/ingrediants', [IngrediantController::class, 'store'])->name('ingrediants.store');
Route::put('/ingrediants/{ingrediant}', [IngrediantController::class, 'update'])->name('ingredians.update');
Route::delete('/ingrediants/{id}', [IngrediantController::class, 'destroy'])->name('ingrediants.destroy');

//------------------------------------------------------------------------------------------



//---------------------------------------Visiteur-----------------------------------------

    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/user', [HomeController::class, 'see'])->name('user.index');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/urblog', [HomeController::class, 'urblog'])->name('urblog');
    Route::get('/More', [HomeController::class, 'more'])->name('more');
    Route::get('/profile', [HomeController::class, 'profile'])->name('user.profile');
//--------------------------------Recipes---------------------------------------------------

Route::get('/Add', [RecipeController::class, 'index'])->name('recipes');
Route::get('/recipe', [RecipeController::class, 'recipe'])->name('recipe');
Route::post('/Add-recipe', [RecipeController::class, 'store'])->name('recipe.store');
Route::get('/Edite/recipe', [RecipeController::class, 'see'])->name('recipes.edit');
Route::put('/Edite/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');

Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');


//------------------------------------auth---------------------------------------
    Route::get('/register', [CustomAuthController::class, 'register'])->name('register');
    Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
    Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
    Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
 
    //----------------------------------------------------------------------------
    Route::get('/user-acces', [UserAccesController::class, 'index'])->name('user');
    Route::post('/user-acces/{user}/toggle-block', [UserAccesController::class, 'toggleBlock'])->name('user.toggle-block');



//---------------------------news.store--------------------------------------------
Route::get('/newsletter/details', [NewsletterController::class, 'showListDetails']);
Route::post('/', [NewsletterController::class, 'store'])->name('news.store');

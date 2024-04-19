<?php

use App\Http\Controllers\ThemeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngrediantController;
use App\Http\Controllers\LiveSearchController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserAccesController;
use Illuminate\Support\Facades\Route;
use Spatie\Newsletter\Facades\Newsletter;


//---------------------------------------Visiteur-----------------------------------------

Route::post('/subscribe', [NewsletterController::class, 'subscribe']);

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/Theme/{theme}', [RecipeController::class, 'filtreParTheme'])->name('filtre');
Route::get('/Ingredients/{ingrediants}', [RecipeController::class, 'filtreParIngrediant'])->name('ingrediant');
//----------------------------------User------------------------------------------------

Route::get('/Recipes/details', [RecipeController::class, 'details'])->name('details');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/urblog', [HomeController::class, 'urblog'])->name('urblog');

//--------------------------------Recipes---------------------------------------------------
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/Add/Recipe', [RecipeController::class, 'index'])->name('recipes');
    Route::get('/Show/Recipe', [RecipeController::class, 'show'])->name('My.recipe');
    Route::get('/Recipe', [RecipeController::class, 'create'])->name('view');

    Route::get('/Recipe/{recipe}', [RecipeController::class, 'details'])->name('recipes.more');
    Route::post('/Add-recipe', [RecipeController::class, 'store'])->name('recipe.store');
    Route::get('/Edite/recipe/{recipe}', [RecipeController::class, 'see'])->name('recipes.edit');
    Route::put('/Edite/recipe/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');

    Route::delete('/Recipe/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');

    Route::get('/Recipe/Theme/{theme}', [RecipeController::class, 'filtreParThemes'])->name('filtrage');


    Route::get('/Recipe/Ingrediants/{ingrediants}', [RecipeController::class, 'filtreParIngrediants'])->name('ingrediants');


    Route::get('/More', [HomeController::class, 'more'])->name('more');
    Route::get('/profile', [HomeController::class, 'profile'])->name('user.profile');

    Route::get('/home', [HomeController::class, 'see'])->name('user.index');
    Route::get('/Recipes/View-More', [RecipeController::class, 'viewMore'])->name('viewMore');
    Route::get('/Recipes/View-More/Search', [LiveSearchController::class, 'action'])->name('action');
});


//------------------------------------auth---------------------------------------
Route::get('/register', [CustomAuthController::class, 'register'])->name('register');
Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::post('/register', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login', [CustomAuthController::class, 'loginUser'])->name('login-user');

// //-----------------------------------Admine-----------------------------------
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/user-acces', [UserAccesController::class, 'index'])->name('user');
    Route::post('/user-acces/{user}/toggle-block', [UserAccesController::class, 'toggleBlock'])->name('user.toggle-block');

    //--------------------------Themes------------------------------------------//
    Route::get('/Theme', [ThemeController::class, 'see'])->name('Theme.index');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::post('/Theme', [ThemeController::class, 'store'])->name('themes.store');
    Route::put('/Theme/{theme}', [ThemeController::class, 'update'])->name('themes.update');
    Route::delete('/Theme/{id}', [ThemeController::class, 'destroy'])->name('themes.destroy');


    //--------------------------Ingrediants------------------------------------------//
    Route::get('/ingrediants', [IngrediantController::class, 'see'])->name('ingrediants.index');
    Route::post('/ingrediants', [IngrediantController::class, 'store'])->name('ingrediants.store');
    Route::put('/ingrediants/{ingrediant}', [IngrediantController::class, 'update'])->name('ingredians.update');
    Route::delete('/ingrediants/{id}', [IngrediantController::class, 'destroy'])->name('ingrediants.destroy');

    //------------------------------------------------------------------------------------------


});

Route::get('/logout', [UserAccesController::class, 'logout'])->name('logout');



//---------------------------news.store--------------------------------------------
Route::get('/newsletter/details', [NewsletterController::class, 'showListDetails']);
Route::post('/', [NewsletterController::class, 'store'])->name('news.store');

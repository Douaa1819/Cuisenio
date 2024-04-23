<?php

use App\Http\Controllers\ForgotPasswordLinkController;
use App\Http\Controllers\recipes\ThemeController;
use App\Http\Controllers\recipes\HelpController;
use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\visitor\HomeController;
use App\Http\Controllers\recipes\IngrediantController;
use App\Http\Controllers\recipes\LiveSearchController;
use App\Http\Controllers\visitor\NewsletterController;
use App\Http\Controllers\User\RecipeController;
use App\Http\Controllers\User\UserAccesController;
use Illuminate\Support\Facades\Route;


//---------------------------------------Visiteur-----------------------------------------
       
Route::get('/print-booklist', [PrintController::class, 'printBooklist'])->name('print.booklist');

//------------------------------------auth---------------------------------------
Route::get('/register', [CustomAuthController::class, 'register'])->name('register');
Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::post('/register', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/Recipes/View-More/Search', [LiveSearchController::class, 'action'])->name('action');



// Route::get('/recipes', [PrintController::class, 'index']);

Route::get('/recipes/download/{id}', [PrintController::class, 'downloadPDF'])->name('recipes.download');


Route::post('/subscribe', [NewsletterController::class, 'subscribe']);


Route::get('/Recipes/View-More', [HelpController::class, 'viewMore'])->name('viewMore');
Route::get('/Recipe/Ingrediants/{ingrediants}', [HelpController::class, 'filtreParIngrediant'])->name('ingrediant');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/Theme/{theme}', [HelpController::class, 'filtreParTheme'])->name('filtre');
//----------------------------------User------------------------------------------------
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/urblog', [HomeController::class, 'urblog'])->name('urblog');

//--------------------------------Recipes---------------------------------------------------
Route::middleware(['auth', 'role:user'])->group(function () {
 
    Route::post('/profile', [HomeController::class, 'updateProfile'])->name('update.profile');

    Route::get('/Show/Recipe', [HelpController::class, 'show'])->name('My.recipe');

Route::resource('/favoris',FavorisController::class);
    Route::get('/Recipe/{recipe}', [HelpController::class, 'details'])->name('recipes.more');
    Route::resource('recipes', RecipeController::class);


    Route::get('/home', [HelpController::class, 'last'])->name('latest-recipes');




    Route::get('/More', [HomeController::class, 'more'])->name('more');
    Route::get('/profile', [HomeController::class, 'profile'])->name('user.profile');

    Route::get('/home', [HomeController::class, 'see'])->name('user.index');

 
});



 //-----------------------------------Admine-----------------------------------
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/user-acces', [UserAccesController::class, 'index'])->name('user');
    Route::post('/user-acces/{user}/toggle-block', [UserAccesController::class, 'toggleBlock'])->name('user.toggle-block');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    //--------------------------Themes------------------------------------------//


    Route::resource('themes', ThemeController::class);

    //--------------------------Ingrediants------------------------------------------//
    Route::resource('ingrediants', IngrediantController::class);
    //---------------------------------------------------------------------------------------


});




//---------------------------news.store--------------------------------------------


Route::get('/forget-password', [ForgotPasswordLinkController::class, 'index'])->name('forgetPassword');

Route::post('/forget-password', [ForgotPasswordLinkController::class, 'forgetPasswordPost'])->name('post.forget');

Route::get('/reset-password/{token}', [ForgotPasswordLinkController::class, 'ResetPassword'])->name('getRsetPassword');

Route::post('/new-password', [ForgotPasswordLinkController::class, 'NewPassword'])->name('NewPassword');


Route::get('/newsletter/details', [NewsletterController::class, 'showListDetails']);
Route::post('/', [NewsletterController::class, 'store'])->name('news.store');
Route::get('/logout', [UserAccesController::class, 'logout'])->name('logout');

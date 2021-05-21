<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile' ,[App\Http\Controllers\profileController::class,'edit'])->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//GOOGLE LOGIN
Route::get("login/google" , [loginController::class,"redirectToGoogle"])->name("login.google");
Route::get("login/google/callback" , [loginController::class,"getDataGoogleCallback"]);

//FACEBOOK LOGIN
Route::get("login/facebook" , [loginController::class,"redirectToFacebook"])->name("login.facebook");
Route::get("login/facebook/callback" , [loginController::class,"getDataFacebookCallback"]);

//GITHUB LOGIN
Route::get("login/github" , [loginController::class,"redirectToGithub"])->name("login.github");
Route::get("login/github/callback" , [loginController::class,"getDataGithubCallback"]);

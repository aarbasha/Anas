<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\CrudController;


//Route page Home
Route::group(['middleware'=>'auth'], function(){
    
    Route::view('/', 'auth.login');
    Route::view('table', 'table')->name('table');

    //Route show profile
    Route::get('profile' ,[App\Http\Controllers\profileController::class,'edit'])->name('profile');

    Route::resource('crud', CrudController::class);
});

















//Route Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route GOOGLE LOGIN
Route::get("login/google" , [loginController::class,"redirectToGoogle"])->name("login.google");
Route::get("login/google/callback" , [loginController::class,"getDataGoogleCallback"]);

//Route FACEBOOK LOGIN
Route::get("login/facebook" , [loginController::class,"redirectToFacebook"])->name("login.facebook");
Route::get("login/facebook/callback" , [loginController::class,"getDataFacebookCallback"]);

//Route GITHUB LOGIN
Route::get("login/github" , [loginController::class,"redirectToGithub"])->name("login.github");
Route::get("login/github/callback" , [loginController::class,"getDataGithubCallback"]);

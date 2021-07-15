<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\PagesController;

use App\Http\Controller\TweetsController;


// use app\Http\Controller\Auth;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::get('/',[App\Http\Controllers\PagesController::class,'index'])->name('index');
 Route::get('/user/{id}',[App\Http\Controllers\PagesController::class,'user'])->name('user');
 Route::get('/profile',[App\Http\Controllers\PagesController::class,'profile']);

// Route::resource('/pages', [PagesController::class]);


 Route::resource('tweets',App\Http\Controllers\TweetsController::class);

 Route::get('tweets/like/{id}',[App\Http\Controllers\TweetsController::class,'like'])->name('like');


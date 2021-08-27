<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Auth0\Login\Auth0Controller;
use App\Http\Controllers\Auth\Auth0IndexController;

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

Route::get('/auth0/callback', [Auth0Controller::class, 'callback'])->name('auth0-callback');

Route::get('/', [PagesController::class, 'index',]);

Route::resource('/startup', PostsController::class);

Route::get('/index', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/login', [Auth0IndexController::class, 'login'])->name('login');
Route::get('/logout', [Auth0IndexController::class, 'logout'])->name('logout');
Route::get('/profile', [Auth0IndexController::class, 'profile'])->name('profile');

Route::post('follow', 'HomeController@follwUserRequest')->name('follow');

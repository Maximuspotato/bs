<?php

use App\Http\Controllers\AttendeesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
//Routes to the different pages
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/events', [PagesController::class, 'events']);
Route::get('/contact', [PagesController::class, 'contact']);

//show attendees register form
Route::get('/attendees/register', [AttendeesController::class, 'register']);
Route::post('/attendees', [AttendeesController::class, 'store']);

Route::get('/users/register', [UserController::class, 'register'])->middleware('auth');
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/login', [UserController::class, 'login']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::post('/users/logout', [UserController::class, 'logout']);

Route::get('/blogs/post', [BlogController::class, 'post']);
Route::get('/blogs', [BlogController::class, 'blogs']);
Route::post('/blogs', [BlogController::class, 'store']);
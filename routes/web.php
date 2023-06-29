<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
use App\Models\Tour;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Show Home Page
Route::get('/', function () {
    return view('pages.home');
});

// Show Home Page
Route::get('/home', function () {
    return view('pages.home');
});

// Show About Page
Route::get('/about', function () {
    return view('pages.about');
});

// Show Tours Page
Route::get('/tours', [TourController::class, 'index']);

// Show Contact Page
Route::get('/contact/create', [MessagesController::class, 'create']);

// Store Messages
Route::post('/contact/create', [MessagesController::class, 'store']);

// Show Tours in Admin View
Route::get('/tour/manage', [TourController::class, 'manage'])->middleware('auth');

// Show create form
Route::get('/tour/create', [TourController::class, 'create'])->middleware('auth');

// Store Tours
Route::post('/tour/create', [TourController::class, 'store'])->middleware('auth');;

// Delete Tour
Route::delete('/tour/{tour}', [TourController::class, 'destroy'])->middleware('auth');

// Show update form
Route::get('/tour/{tour}/edit', [TourController::class, 'edit'])->middleware('auth');

// Update Tour
Route::put('/tour/{tour}', [TourController::class, 'update'])->middleware('auth');

// Show Messages in Admin View
Route::get('/messages/manage', [MessagesController::class, 'manage'])->middleware('auth');

// Delete Message
Route::delete('/message/{message}', [MessagesController::class, 'destroy'])->middleware('auth');

// Display Single Message
Route::get('/message/{message}', [MessagesController::class, 'show'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/authenticate', [UserController::class, 'authenticate']);

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

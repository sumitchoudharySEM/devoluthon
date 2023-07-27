<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

//Route::view('/', 'pages.index');
Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/team', [Controller::class, 'team'])->name('team');
// Route::get('/sponsors', [Controller::class, 'sponsors'])->name('sponsors');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/register', [Controller::class, 'register'])->name('register');

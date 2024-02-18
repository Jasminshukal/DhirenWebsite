<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/Products', function () {
    return view('Products');
})->name('Products');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

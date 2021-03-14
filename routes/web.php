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
/* uitschakelen
Route::get('/', function () {
    return view('welcome');
});
*/

// hoofdnavigatie
Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('home-page');
Route::get('contact', [App\Http\Controllers\ContactPageController::class, 'index'])->name('contact-page');
Route::get('aboutus', [App\Http\Controllers\AboutUsPageController::class, 'index'])->name('about-us-page');

// secundaire navigatie
// routes mbt inloggen, registreren, authenticatie...
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// verzenden van contactformulier
Route::post('send/contactForm', [App\Http\Controllers\ContactPageController::class, 'processContactForm']);

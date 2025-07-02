<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    // return view('welcome');
    return view('frontend.home');
})->name('home');

Route::get('/contact-us', [FrontendController::class, 'contactus'])->name('contact-us');
Route::get('/service/{slug}', [FrontendController::class, 'services'])->name('service');
Route::get('/solution/{slug}', [FrontendController::class, 'solutions'])->name('solutions');

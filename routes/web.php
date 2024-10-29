<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/get-started', function () {
    return view('pages.get-started');
})->name('get-started');
Route::get('/join-us', function () {
    return view('pages.join-us');
})->name('join-us');
Route::post('/save-newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::post('/form/store', [FormController::class, 'store'])->name('form.store');


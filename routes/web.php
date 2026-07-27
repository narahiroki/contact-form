<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');
    Route::post('/', [ContactController::class, 'store'])->name('store');
    Route::get('/complete', [ContactController::class, 'complete'])->name('complete');
});

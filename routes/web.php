<?php

use App\Http\Controllers\Admin\ContactController as AdminContactController;
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

Route::prefix('admin/contacts')->name('admin.contacts.')->group(function () {
    Route::get('/', [AdminContactController::class, 'index'])->name('index');
    Route::get('/{contact}', [AdminContactController::class, 'show'])->name('show');
    Route::patch('/{contact}', [AdminContactController::class, 'update'])->name('update');
});

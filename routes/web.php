<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;


Route::get('/', [GeneralController::class, 'home'])->name('home');

Route::get('/about', [GeneralController::class, 'about'])->name('about');

Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');

Route::get('/careers', [GeneralController::class, 'career'])->name('careers');

Route::get('/appointment', [GeneralController::class, 'appointment'])->name('appointment');

Route::get('/service/{type}/{service}', [GeneralController::class, 'service']);

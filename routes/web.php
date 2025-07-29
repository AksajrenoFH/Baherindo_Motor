<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::resource('home', WelcomeController::class);
Route::resource('about', AboutController::class);
Route::resource('contact', ContactController::class);
Route::resource('formAdmin', formController::class);
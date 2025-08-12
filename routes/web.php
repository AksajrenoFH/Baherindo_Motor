<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\listCarController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\formController;
use App\Http\Controllers\motorController;
use App\Http\Controllers\mobilController;
use Illuminate\Support\Facades\Route;

Route::resource('home', WelcomeController::class);
Route::resource('car', listCarController::class);
Route::resource('about', AboutController::class);
Route::resource('contact', ContactController::class);
Route::resource('formAdmin', formController::class);
Route::resource('formMotor', motorController::class);
Route::resource('formMobil', mobilController::class);
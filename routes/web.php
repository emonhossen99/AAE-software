<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutContriller;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SingleServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboradController;
use App\Http\Controllers\SinginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController :: class, 'Home']);
Route::get('/about', [AboutContriller :: class, 'About']);
Route::get('/services', [ServicesController :: class, 'AllServices']);
Route::get('/services/{id}',[SingleServiceController :: class,'SingleService']);
Route::get('/contact', [ContactController :: class, 'ContactMe']);
Route::get('/dashborad', [DashboradController :: class, 'Dashborad']);
Route::get('/singin', [SinginController :: class, 'Singin']);
Route::get('/register', [RegisterController :: class, 'Register']);
<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', [Authcontroller::class,'index'])->name('login');
Route::get('/home', [Dashboard::class,'index'])->name('home');
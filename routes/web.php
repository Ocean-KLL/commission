<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\details;
use app\Http\Controllers\apropos;


Route::get('/', [index::class, 'index'])->name('index');
Route::get('/detail', [details::class, 'index'])->name('det');
route::get('/apropos', [apropos::class, 'index'])->name('apropos');


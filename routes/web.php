<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Location;
use App\Http\Controllers\achat_vente;

Route::get('/Location',[Location::class, 'GetLocate'])->name('Location');
Route::get('/',[achat_vente::class, 'Getachat'])->name('achat_vente');

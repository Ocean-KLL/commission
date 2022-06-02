<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Location;
use App\Http\Controllers\achat_vente;
use App\Http\Controllers\infos;

Route::get('/Location',[Location::class, 'GetLocate'])->name('Location');
Route::get('/achat_vente',[achat_vente::class, 'Getachat'])->name('achat_vente');
Route::get('/infos',[infos::class, 'Getinfos'])->name('infos');

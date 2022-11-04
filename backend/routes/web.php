<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

//Champions
Route::get('/champions', [Controller::class, 'getAllChampions'])->name('champions.all');
Route::get('/champions/{champion}', [Controller::class, 'getChampion'])->name('champion');

//Items
Route::get('/items', [Controller::class, 'getAllItems'])->name('items.all');
Route::get('/items/{item}', [Controller::class, 'getItem'])->name('item');

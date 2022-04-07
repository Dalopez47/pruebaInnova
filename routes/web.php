<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavoriteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/urlFavorites/{item}', 
[App\Http\Controllers\FavoriteController::class,'show'])
->name('urlFavorites.show');


Route::resource('urlFavorites', FavoriteController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';

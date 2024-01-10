<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
Route::get('/products',[ProductController::class,'show'])->name('/products');
Route::controller(ProductController::class)->group(function(){
    Route::get('images/{id}/edit','edit');
    Route::get('products/{id}/delete','delete');
    Route::get('/all','index')->name('/all');
    Route::put('products/{id}/update','update');
Route::post('/add','store')->name('save');
Route::get('/','dash')->name('dashboard');
});
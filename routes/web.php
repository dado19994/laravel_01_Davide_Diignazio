<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('aboutUsDetail');

route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');


Route::get('/prodotti', [ProductController::class, 'products'])->name('products');

route::get('/prodotti/detail/{id}', [ProductController::class, 'productDetail'])->name('productDetail');

// invio mail
Route::post('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs');


// rotta inserimento prodotto

route::get('/prodotti/create', [ProductController::class, 'create'])->name('productCreate');
Route::post('/prodotti/store', [ProductController::class, 'store'])->name('productStore');

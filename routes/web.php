<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('aboutUsDetail');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');


Route::get('/prodotti', [ProductController::class, 'products'])->name('products');

// route::get('/prodotti/detail/{id}', [ProductController::class, 'productDetail'])->name('productDetail');

// invio mail
Route::post('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs');


// rotta inserimento prodotto

Route::get('/prodotti/create', [ProductController::class, 'create'])->name('productCreate')->middleware('auth');
Route::post('/prodotti/store', [ProductController::class, 'store'])->name('products.store')->middleware('auth');

// VIsualizza prodotto

Route::get('/prodotti/show/{product}', [ProductController::class, 'productShow'])->name('products.show');

Route::get('/prodotti/edit/{product}' , [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::put('/prodotti/update/{product}', [ProductController::class, 'update'])
    ->name('products.update')
    ->middleware('auth');

Route::delete('/prodotti/delete/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');

// tutti i film per singolo utente
Route::get('/user/profile' , [PublicController::class, 'profile'])->name('user.profile')->middleware('auth');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

route::get('/chi-siamo', function () {
    $users = [
        ['name' => 'Mario', 'surname'=>'Rossi', 'role'=>'CEO'],
        ['name' => 'Luigi', 'surname'=>'Bianchi', 'role'=>'CTO'],
        ['name' => 'Giulia', 'surname'=>'Verdi', 'role'=>'CFO'],
    ];


    return view('about-us', [
        'users' => $users
    ]);
})->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', function ($name) {
    $users = [
        ['name' => 'Mario', 'surname'=>'Rossi', 'role'=>'CEO'],
        ['name' => 'Luigi', 'surname'=>'Bianchi', 'role'=>'CTO'],
        ['name' => 'Giulia', 'surname'=>'Verdi', 'role'=>'CFO'],
    ];
    foreach ($users as $user) {
        if ($name == $user['name']){
            return view('about-us-detail', [
                'user' => $user
            ]);
        }
    }
})->name('aboutUsDetail');

route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');


Route::get('/prodotti', function () {
        $products = [
        ['id' => 1, 'name' => 'Olio Extravergine di Oliva', 'img'=>'/media/mediaolio/olio1.jpg', 'price'=>'10€'],
        ['id' => 2, 'name' => 'Olio di Semi di Girasole','img'=>'/media/mediaolio/olio2.jpg', 'price'=>'5€'],
        ['id' => 3, 'name' => 'Olio di Cocco', 'img'=>'/media/mediaolio/olio3.jpg', 'price'=>'8€'],
    ];
    return view('prodotti.products', [
        'products' => $products
    ]);
})->name('products');

route::get('/prodotti/detail/{id}', function ($id) {
    $products = [
        ['id' => 1, 'name' => 'Olio Extravergine di Oliva', 'img'=>'/media/mediaolio/olio1.jpg', 'price'=>'10€'],
        ['id' => 2, 'name' => 'Olio di Semi di Girasole','img'=>'/media/mediaolio/olio2.jpg', 'price'=>'5€'],
        ['id' => 3, 'name' => 'Olio di Cocco', 'img'=>'/media/mediaolio/olio3.jpg', 'price'=>'8€'],
    ];
    foreach ($products as $product) {
        if ($id == $product['id']){
            return view('prodotti.product-detail', [
                'product' => $product
            ]);
        }
    }
})->name('productDetail');

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public  $products = [
        ['id' => 1, 'name' => 'Olio Extravergine di Oliva', 'img'=>'/media/mediaolio/olio1.jpg', 'price'=>'10€'],
        ['id' => 2, 'name' => 'Olio di Semi di Girasole','img'=>'/media/mediaolio/olio2.jpg', 'price'=>'5€'],
        ['id' => 3, 'name' => 'Olio di Cocco', 'img'=>'/media/mediaolio/olio3.jpg', 'price'=>'8€'],
    ];
    public function products() {

    return view('prodotti.products', [
        'products' => $this->products
    ]);
}

public function productDetail($id) {

    foreach ($this->products as $product) {
        if ($id == $product['id']){
            return view('prodotti.product-detail', [
                'product' => $product
            ]);
        }
    }
}
}

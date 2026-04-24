<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public  $products = [
    //     ['id' => 1, 'name' => 'Olio Extravergine di Oliva', 'img' => '/media/mediaolio/olio1.jpg', 'price' => '10€'],
    //     ['id' => 2, 'name' => 'Olio di Semi di Girasole', 'img' => '/media/mediaolio/olio2.jpg', 'price' => '5€'],
    //     ['id' => 3, 'name' => 'Olio di Cocco', 'img' => '/media/mediaolio/olio3.jpg', 'price' => '8€'],
    // ];
    public function products()
    {
        $products = Product::all();
        return view('prodotti.products', [
            'products' => $products
        ]);
    }

    // public function productDetail($id)
    // {

    //     foreach ($this->products as $product) {
    //         if ($id == $product['id']) {
    //             return view('prodotti.product-detail', [
    //                 'product' => $product
    //             ]);
    //         }
    //     }
    // }

    public function create()
    {
        return view('prodotti.create');
    }

    public function store(ProductRequest $request)
    {
            Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'img' => $request->file('img')->store('public/images')
            ]);

            return redirect()->route('homepage')->with('success', 'Prodotto creato con successo!');

        // $product = new Product();
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->description = $request->description;
        // $product->save();
        // return redirect()->route('products')->with('success', 'Prodotto creato con successo!');

    }

}

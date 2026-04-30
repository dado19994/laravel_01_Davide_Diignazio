<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductEditRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Genre;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class ProductController extends BaseController
{

    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth')->except(['products', 'productShow']);
    }


    public function products()
    {
        $products = Product::all();
        return view('prodotti.products', compact('products'));
    }



    public function create()
    {
        $genres = Genre::all();
        return view('prodotti.create', compact('genres'));
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'img' => $request->file('img')->store('images', 'public'),
            'user_id' => Auth::user()->id,
        ]);

        $product->genres()->attach($request->genres);




        return redirect()->route('homepage')->with('success', 'Prodotto creato con successo!');
    }

    public function productShow(Product $product)
    {
        return view('prodotti.show', compact('product'));
    }

    public function edit(Product $product)
    {
        if (Auth::check() && Auth::user()->id !== $product->user_id) {
            abort(403, 'Non sei autorizzato a modificare questo prodotto.');
        }
        return view('prodotti.edit', compact('product'));
    }

    public function update(ProductEditRequest $request, Product $product)
    {
        if (Auth::check() && Auth::user()->id !== $product->user_id) {
            abort(403, 'Non sei autorizzato a modificare questo prodotto.');
        }
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        if ($request->hasFile('img')) {
            $request->validate([
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'img.image' => 'Il file caricato deve essere un\'immagine.',
                'img.mimes' => 'L\'immagine deve essere in formato jpeg, png, jpg, gif o svg.',
                'img.max' => 'L\'immagine non può superare i 2048 KB.',
            ]);
            $product->update([
                'img' => $request->file('img')->store('/public/images')
            ]);
        }

        return redirect()->route('products.show', $product)
            ->with('success', 'Prodotto aggiornato!');
    }

    public function destroy(int $id)
    {
        $product = Product::find($id, ['*']);
        if (!$product) {
            return redirect()->route('products')->with('errorMessage', 'Prodotto non trovato.');
        }

        if ($product->user_id == Auth::user()->id) {
            Product::destroy($id);
            return redirect()->route('products')->with('success', 'Prodotto eliminato con successo!');
        } else {
            return redirect()->route('products')->with('errorMessage', 'Non sei autorizzato a eliminare questo prodotto.');
        }
    }
}

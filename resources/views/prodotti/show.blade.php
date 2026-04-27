<x-layout>
    <div class="container-fluid products">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Prezzo: €{{ $product->price }}</p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ Storage::url($product->img) }}" alt="{{ $product->name }}" class="card-img-top cardImg">
            </div>
            <div class="row">
                <form action="{{ route('products.destroy', compact('product')) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina Prodotto</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

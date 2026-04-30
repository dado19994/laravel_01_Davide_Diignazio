<x-layout>
    <div class="container-fluid products">
        <div class="row h-100 justify-content-center align-items-center shadow my-5">
            <div class="col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Prezzo: €{{ $product->price }}</p>
                <ul>
                    @forelse ($product->genres as $genre)
                        <li class="small">{{ $genre->name }}</li>
                    @empty
                        <p class="text-muted small">Nessuna categoria associata.</p>
                    @endforelse
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ Storage::url($product->img) }}" alt="{{ $product->name }}"
                    class="card-img-top cardImg shadow w-100 h-100 object-fit-cover">
            </div>
            <div class="d-flex justify-content-center gap-3 mt-4">

                <!-- Bottone indietro -->
                <a href="{{ route('products') }}" class="btn btn-primary">
                    ← Indietro
                </a>

                <!-- Delete -->
                @auth

                @if (Auth::check() && Auth::user()->id === $product->user_id )


                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Elimina Prodotto
                    </button>
                </form>
                @endif
                @endauth
            </div>
        </div>
    </div>
</x-layout>

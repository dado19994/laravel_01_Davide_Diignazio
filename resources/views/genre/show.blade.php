<x-layout>
    <div class="container-fluid products">
        <div class="row">
            <h2 class="display-4 text-dark text-color text-center shadow py-5">Seleziona tipo di olio
                <span>{{ $genre->name }}</span></h2>
        </div>
        <div class="row justify-content-center shadow my-5">
            @forelse ($genre->products as $product)
                <div class="col-12 col-md-4 d-flex justify-content-beetween align-items-center">
                    <x-card :product="$product" />
                </div>
            @empty
            <div class="col-12 col-mmd-8">
                <h4 class="text-white text-color text-center">Nessun prodotto disponibile per questo tipo di olio.</h4>
                <a href="{{ route('genre.create') }}" class="btn btn-primary">Crea nuovo genere</a>
            </div>
            @endforelse

        </div>
    </div>
</x-layout>

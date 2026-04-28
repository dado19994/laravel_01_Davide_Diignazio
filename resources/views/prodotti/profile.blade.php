<x-layout>
    <div class="container-fluid products">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <h2 class="text-white text-color text-center"> Profilo di {{ auth()->user()->name }} </h2>
            @forelse (Auth::user()->products as $product)
                <div class="col-12 col-md-3 my-5 d-flex justify-content-center align-items-center">
                    <x-card :product="$product" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3 class="text-white text-color text-center">Non hai ancora inserito nessun prodotto</h3>
                    <a href="{{ route('productCreate') }}" class="btn btn-outline-warning">Pubblica il tuo primo
                        prodotto</a>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>

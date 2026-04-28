<x-layout>

    <header>
        <div class="container-fluid products">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="row">
                    <h2 class="display-5 text-white text-center text-color">Prodotti</h2>
                </div>
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 my-5 d-flex justify-content-center align-items-center">
                        {{-- // Qui utilizziamo il componente card per ogni prodotto, passando i dati del prodotto come parametro --}}
                        <x-card :product="$product">
                            {{-- // In alternativa possiamo farlo singolarmente senza creare un componente --}}
                            {{-- title="{{ $product['name'] }}"
                            price="{{ $product['price'] }}"
                            img="{{ $product['img'] }}" --}}
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>
    </header>
</x-layout>

<x-layout>

    <header>
        <div class="container-fluid products">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="row">
                    <h2 class="display-5 text-white text-center text-color">{{ $product['name'] }}</h2>
                </div>
                <div class="col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center">
                    <h2>{{ $product['name'] }}</h2>
                    <h4>{{ $product['price'] }}</h4>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="{{ $product['img'] }}" class="card-img-top cardImg" alt="{{ $product['name'] }}">
                </div>
            </div>
        </div>
    </header>

</x-layout>

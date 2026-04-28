<x-layout>
    <div class="container-fluid products">
        <div class="row">
            <h2 class="text-center my-4 text-color shadow">Inserisci un nuovo prodotto</h2>
        </div>
        <div class="row justify-content-center shadow my-5">
            <div class="col-12 col-md-8 text-color">
                @if ($errors->any())
                    <div class="alert alert-danger col-6 text-center mx-auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('products.update', compact('product')) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Prodotto</label>
                        <input type="text" name="name" class="form-control" id="name"
                            aria-describedby="nameHelp" value="{{ old('name', $product->name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine:</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" id="price"
                            value="{{ old('price', $product->price) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrivi il prodotto</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                            aria-describedby="descriptionHelp">{{ old('description', $product->description) }}</textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                    <a href="{{ route('products') }}" class="btn btn-primary">
                        ← Indietro
                    </a>
                    <button type="submit" class="btn btn-success">Pubblica</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

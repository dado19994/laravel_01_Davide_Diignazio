<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h2 class="text-center">Inserisci un nuovo prodotto</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{ route('productStore') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Prodotto</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrivi il prodotto</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" aria-describedby="descriptionHelp"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Pubblica</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

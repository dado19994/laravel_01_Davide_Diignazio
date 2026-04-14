<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Olio D'oliva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><i class="bi bi-align-bottom"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    <a class="nav-link" href="{{ route('aboutUs') }}">Chi siamo</a>
                    <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                    <a class="nav-link" href="{{ route('products') }}">Prodotti</a>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div class="container-fluid products">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="row">
                    <h2 class="display-5 text-white text-center text-color">Prodotti</h2>
                </div>
                @foreach ($products as $product)
                    <div class="col-12 col-md-4">
                        <div class="card mb-3" style="width: 18rem;">
                            <img src="{{ $product['img'] }}" class="card-img-top cardImg" alt="{{ $product['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['name'] }}</h5>
                                <p class="card-text">{{ $product['price'] }}</p>
                                <a href="{{ route('productDetail', ['id' => $product['id']]) }}" class="btn btn-primary">Acquista ora</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>

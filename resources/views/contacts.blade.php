<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contatti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><i class="bi bi-align-bottom"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="container-fluid header">
            <div class="row h-100 justify-content-around align-items-center">
                <div class="col-12 h-25 justify-content-center align-items-center">
                    <h2 class="text-white text-color display-5 text-center">Contattaci</h2>
                </div>
                <div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                    <div class="row">
                        <div class="col-12"><i class="icon bi bi-whatsapp"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>+39 123 456 789</p>
                        </div>
                    </div>



                </div>
                <div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                    <div class="row">
                        <div class="col-12"><i class="iconbi bi-instagram"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>@olio.d.oliva</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                    <div class="row">
                        <div class="col-12"><i class="iconbi bi-facebook"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Olio D'oliva</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>

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

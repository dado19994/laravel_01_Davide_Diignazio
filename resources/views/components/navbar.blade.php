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
                    <a class="nav-link" href="{{ route('genre.index') }}">Categorie</a>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Inserisci
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('productCreate') }}">Inserisci Prodotto</a></li>
                                <li><a class="nav-link" href="{{ route('genre.create') }}">Inserisci Categoria</a></li>
                            </ul>
                        </li>

                    @endauth

                    @guest
                        <a class="nav-link" href="#"
                            onclick="alert('Devi effettuare login o registrarti per inserire un prodotto')">
                            Inserisci Prodotto
                        </a>
                    @endguest
                    <li class="nav-item dropdown">

                        @auth
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Ciao, {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('user.profile') }}">Il mio profilo</a></li>
                                <li>
                                    <a class="dropdown-item"
                                        onclick="event.preventDefault(); document.getElementById('form-logout').submit();"
                                        href="{{ route('logout') }}">
                                        Logout
                                    </a>

                                    <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        @endauth


                        @guest
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Ospite
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            </ul>
                        @endguest

                    </li>
                    </li>
                </div>
            </div>
        </div>
    </nav>

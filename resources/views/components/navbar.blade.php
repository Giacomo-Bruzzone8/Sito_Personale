<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Ciao, {{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu">
                            <li class=" text-center p-0 d-flex  justify-content-center">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="text-decoration-none btn d-flex align-items-center justify-content-center dropdown-btn">
                                        <i class="bi bi-box-arrow-in-left fs-4"></i>
                                        Logout
                                    </button>
                                </form>

                            </li>
                        </ul>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('create.article') }}">Crea</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Ciao, Utente!</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

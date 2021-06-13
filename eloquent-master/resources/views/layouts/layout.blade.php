<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="{{asset('/css/mangas.css')}}">
        <link rel="stylesheet" href="{{asset('lib/bootstrap/bootstrap.min.css')}}">
        <title>
            @yield('titrePage')
        </title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/mangas')}}">MangaWorld</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/mangas')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.senscritique.com/bd/actualite/manga">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.senscritique.com/bd/actualite/manga">Comics</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Voir...
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{url('/dessinateurs')}}">Les dessinateurs</a></li>
                            <li><a class="dropdown-item" href="{{url('/scenaristes')}}">les scénaristes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                       
                            @auth
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Bienvenue, {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            
                            @else
                                <a class="nav-link active"aria-current="page" href="{{ route('login') }}" >Login</a>
                            @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <header>
            <h1>@yield('titreItem')</h1>
        </header>
        @yield('contenu')
        <footer class ="footer">
            MangaWeb - copyright 3AInfo - 2021
        </footer>     
        <script type='text/javascript' src="{{ asset('/lib/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>
<header>
    <nav class="navbar navbar-dark fixed-top bg-dark ">
        <a class="navbar-brand ms-3" href="/publicaciones">P2P2</a>
        <div class="container">
            <form class="d-flex w-75 m-auto" role="search" action="/publicaciones-busqueda/" method="get">
                {{csrf_field()}}
                <input class="form-control me-2 w-100 " type="search" placeholder="Busqueda" aria-label="Search" name="busqueda">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-dark my-1 bg-dark pt-0 pb-1">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/publicaciones">Inicio</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/mi-cuenta/{{Auth::user()->getAuthIdentifier()}}">Mi Cuenta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/crear-publicacion">Crear Publicación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Cerrar Sesión</a>
                        </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
</header>

<main>

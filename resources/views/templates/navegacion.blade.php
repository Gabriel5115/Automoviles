<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">GABSA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('coche.index')}}">Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('coche.create')}}">Añadir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('coche.ordenar')}}">Ordenar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('coche.marcas')}}">Marcas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('IniciarSesion')}}">Iniciar sesion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Content -->

<style>
    .carousel-item {
        height: 65vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
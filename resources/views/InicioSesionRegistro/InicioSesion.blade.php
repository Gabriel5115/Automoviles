@extends('templates/genericoInicioSesion')

@section('title', 'Iniciar Sesion')

@section('content')

<body>
    <div class="login-dark">
        <form method="post" action="{{route('user.validar')}}">
            {{ csrf_field() }}
            <h2 class="sr-only">Iniciar Sesion</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group">
                <input class="form-control" type="text" name="usuario" placeholder="Usuario">
                @error('usuario')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Contraseña">
                @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Iniciar Sesion</button>
                @if(Session::has('errorsesion'))
                <small class="text-danger">{{Session::get('errorsesion')}}</small>
                @endif
            </div>

        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

@endsection
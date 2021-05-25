<!DOCTYPE html>
<html lang="es">
    <head>
        <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel='stylesheet' type='text/css' href="{{ asset('css/custom.css') }}" /> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body class="container-fluid p-0">

        @include('templates/cabeceraInicioSesion')



        @yield('content')


        @include('templates/pieInicioSesion')

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
                integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
                integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>
    </body>
    <style>
        .login-dark {
            height:1000px;
            background:#475d62 url(/storage/img/star-sky.jpg);
            background-size:cover;
            position:relative;
        }

        .login-dark form {
            max-width:320px;
            width:90%;
            background-color:#1e2833;
            padding:40px;
            border-radius:4px;
            transform:translate(-50%, -50%);
            position:absolute;
            top:50%;
            left:50%;
            color:#fff;
            box-shadow:3px 3px 4px rgba(0,0,0,0.2);
        }

        .login-dark .illustration {
            text-align:center;
            padding:15px 0 20px;
            font-size:100px;
            color:#2980ef;
        }

        .login-dark form .form-control {
            background:none;
            border:none;
            border-bottom:1px solid #434a52;
            border-radius:0;
            box-shadow:none;
            outline:none;
            color:inherit;
        }

        .login-dark form .btn-primary {
            background:#214a80;
            border:none;
            border-radius:4px;
            padding:11px;
            box-shadow:none;
            margin-top:26px;
            text-shadow:none;
            outline:none;
        }

        .login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
            background:#214a80;
            outline:none;
        }

        .login-dark form .forgot {
            display:block;
            text-align:center;
            font-size:12px;
            color:#6f7a85;
            opacity:0.9;
            text-decoration:none;
        }

        .login-dark form .forgot:hover, .login-dark form .forgot:active {
            opacity:1;
            text-decoration:none;
        }

        .login-dark form .btn-primary:active {
            transform:translateY(1px);
        }
    </style>
</html>
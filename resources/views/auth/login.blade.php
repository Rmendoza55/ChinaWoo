<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistemas de Usuarios</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('../../plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('../../plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('../../dist/css/adminlte.min.css') }}">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        /* Contenedor principal */
        .d-flex {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
        }

        /* Imagen y caja de login */
        .brand-image {
            flex: 1;
            background-size: cover;
            background-position: center;
            min-height: 50vh;
        }

        .login-box {
            flex: 1;
            max-width: 100%;
            /* Ajusta el ancho máximo de la caja de login */
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: crimson;
            padding: 20px;
            margin: 0 auto;
            /* Centra la caja de login */
        }

        /* Asegura que la caja de login no se salga de la pantalla */
        .card-body {
            background-color: crimson;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 15%;
            padding-right: 15%;
            padding-bottom: 40%;
            padding-top: 1%;
        }

        /* Media queries para responsividad */
        @media (min-width: 768px) {
            .d-flex {
                flex-direction: row;
            }

            .brand-image {
                flex: 1;
                min-height: 100vh;
                background-color: rgba(0, 0, 0, 15);
            }

            .login-box {
                flex: 1;
                max-width: 70%;
                /* Ajusta el ancho máximo en pantallas grandes */
            }
        }
    </style>
</head>

<body class="hold-transition layout-fixed">
    <div class="d-flex">
        <img src="{{ asset('dist/img/fondo_login.jpg') }}" alt="AdminLTE Logo" class="brand-image"
            style="max-width: 67%; width: 100%; object-fit: cover;" />
        <div class="login-box mb-sm-6">
            <br><br>
            <div class="login-logo text-center">
                <img src="{{ asset('dist/img/logo_sin_fondo.png') }}" style="width: 50%; height: auto;" />
            </div>
            <div class="card-body" style="background-color: crimson;">
                <p class="login-box-msg" style="color: white; font-size: 15px"><b>¡El Mejor Restaurante de Comida
                        Chino Peruana!</b></p>
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="number" name="num_doc" class="form-control" placeholder="Numero de Documento.."
                            required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark btn-block">Ingresar</button>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>

        <!-- jQuery -->
        <script src="{{ asset('../../plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('../../dist/js/adminlte.min.js') }}"></script>
</body>

</html>

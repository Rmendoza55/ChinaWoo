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
            /* Ajusta el mínimo que debe ocupar la imagen */
        }

        .login-box {
            flex: 1;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: crimson;
            padding: 20px;
        }

        /* Asegura que la caja de login no se salga de la pantalla */
        .card-body {
            background-color: crimson;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Media queries para responsividad */
        @media (min-width: 768px) {
            .d-flex {
                flex-direction: row;
            }

            .brand-image {
                flex: 1;
                min-height: 100vh;
                /* Imagen a la altura total en pantallas grandes */
            }

            .login-box {
                flex: 1;
                max-width: 50%;
                /* Ajustar ancho máximo en pantallas grandes */
            }
        }
    </style>
</head>

<body class="hold-transition layout-fixed">
    <div class="d-flex flex-lg-row flex-column flex-wrap" style="height: 100vh; width: 100vw;">
        <img src="{{ asset('dist/img/fondo_login.jpg') }}" alt="AdminLTE Logo" class="brand-image" style="flex: 1;" />
        <div class="login-box mb-sm-6" style="background-color: crimson">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.login-logo -->
            <div class="card-body " style="background-color: crimson; flex: 1; max-width: 100%;">
                <p class="login-box-msg">Inicia tu Sesion</p>
                <form action="# method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Correo Electronico"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
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

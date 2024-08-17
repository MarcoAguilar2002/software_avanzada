<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudad de Dios - Login</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
    <script nonce="6926973c-ff13-48fb-a105-4c433d5661bd">
        try {
            (function(w, d) {
                ! function(j, k, l, m) {
                    // Bloque de código que puedes eliminar o comentar
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
    
</head>

<body class="hold-transition login-page"
    style="background-image:url('{{ url('assets/img/hero-bg.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">

    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('index') }}" class="h1"><b>Ciudad de Dios</b> </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg"><b>Iniciar Sesión</b></p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="dni" class="col-md-4 col-form-label text-md-end">DNI</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" id="dni" name="dni" required autofocus>


                            @error('dni')
                                <span class="invalid-feedback" role="alert">
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-9 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    <b>Recordar contraseña</b>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-12 offset-md-4 mb-1">
                            <button type="submit" class="btn btn-primary">
                                Ingresar
                            </button>
                        </div>

                        <div class="row text-center">
                            <div class="col-md-12">
                                <p>¿No tienes una cuenta? <a href="{{ route('register') }}" class="btn btn-link">Registrate aquí</a></p>
                            </div>
                        </div>

                    </div>

                </form>


            </div>

        </div>

    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>

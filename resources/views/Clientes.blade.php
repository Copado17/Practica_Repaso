<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <title>Agregar clientes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!--Barra de navegacion-->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Formulario">Registro de libro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Clientes">Registro clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    @if (session()->has('mensaje'))
    <div class="alert alert-primary" role="alert">
        {!! " Se agrego correctamente el cliente" !!}
    </div>
    @endif

















    <!--Hey! This is the original version
of Simple CSS Waves-->

    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">







            <div class="container col-md-5">

                <div class="card-body">
                    <div class="card-header ">
                        <div class="col mb-3">
                            <h1 class="display-5">Agregar clientes</h1>
                        </div>
                        <form action="Formulario_cliente" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="col mt-2">

                                    <div class="text-start">

                                        <div class="col mb-3">
                                            <h6>Ingresa el nombre completo</h6>
                                            <input type="text" class="form-control" name="Nombre" placeholder="Nombre"
                                                value="{{old('Nombre')}}">
                                            @if ($errors->has('Nombre'))
                                            <div class="alert alert-warning" role="alert">
                                                <strong>{{ $errors->first('Nombre') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col mb-3">
                                            <h6>Ingresa el correo del cliente</h6>
                                            <input class="form-control" type="email" placeholder="Correo" name="Correo"
                                                value="{{old('Correo')}}" aria-label="default input example">
                                            @if ($errors->has('Correo'))
                                            <div class="alert alert-warning" role="alert">
                                                <strong>{{ $errors->first('Correo') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>





                                        <div class="col mb-3">
                                            <h6>Ingresa el numero de serie de la INE</h6>
                                            <input class="form-control" type="number" placeholder="No.serie"
                                                name="Numero_Serie" value="{{old('Numero_Serie')}}"
                                                aria-label="default input example">
                                            @if ($errors->has('Numero_Serie'))
                                            <div class="alert alert-warning" role="alert">
                                                <strong>{{ $errors->first('Numero_Serie') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col mt-2">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
    <!--Header ends-->

    <!--Content starts-->
    <div class="content flex">
        <p>GANDHI COPYRIGHT DERECHOS DE AUTOR 27 DE OCTUBRE DEL 2022 </p>
    </div>
    <!--Content ends-->


    @yield('contenido')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

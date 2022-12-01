<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar libro</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>



    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">

        <a href="/TClientes" class="btn btn-primary m-5">Regresar</a>
            <div class="container col-md-5">
                <h1 class="display-4 text-center mt-5 mb-5 ">Editar <h1>

               

                        <div class="card text-center mb-5">
                            <div class="card-header">
                                Editar clientes
                            </div>
                            <div class="card-body">

                                <form method="post" action="{{route('Clientes.update', $consultarId->id)}}">
                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <div class="col mt-2">

                                            <div class="text-start">

                                            <div class="col mb-3">
                                            <h6>Ingresa el nombre completo</h6>
                                            <input type="text" class="form-control" name="nombre" placeholder="nombre"
                                            value="{{$consultarId->nombre}}">
                                            
                                            @if ($errors->has('nombre'))
                                            <div class="alert alert-warning" role="alert">
                                                <strong>{{ $errors->first('nombre') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col mb-3">
                                            <h6>Ingresa el correo del cliente</h6>
                                            <input class="form-control" type="email" placeholder="Correo" name="correo"
                                            value="{{$consultarId->correo}}" aria-label="default input example">
                                            @if ($errors->has('correo'))
                                            <div class="alert alert-warning" role="alert">
                                                <strong>{{ $errors->first('correo') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>





                                        <div class="col mb-3">
                                            <h6>Ingresa el numero de serie de la INE</h6>
                                            <input class="form-control" type="number" placeholder="No.serie"
                                                name="no_serie_ine" value="{{$consultarId->no_serie_ine}}"
                                                aria-label="default input example">
                                            @if ($errors->has('no_serie_ine'))
                                            <div class="alert alert-warning" role="alert">
                                                <strong>{{ $errors->first('no_serie_ine') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>

                                               
                                                
                                            </div>
                                        </div>
                                    </div>






                            </div>
                            <div class="card-footer text-muted">
                                <button type="submit" class="btn btn-primary">Actualizar informacion</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

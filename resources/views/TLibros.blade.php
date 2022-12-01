<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="css/styles.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="TLibros">Tabla de libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/TClientes">Tabla de clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if (session()->has('Eliminacion'))

{!! "<script>
    Swal.fire(
        'Se elimino compa',
        ':)',
        'success'
    )

</script>" !!}

@endif

@if (session()->has('Editar'))

{!! "<script>
    Swal.fire(
        'Se edito compa',
        ':)',
        'success'
    )

</script>" !!}

@endif
    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">
@include ('Modaleliminar')

            <div class="container">
                <div class="my-5">
                    <h1 class="display-5">Tabla de libros</h1>
                </div>



                <table class="table table-striped my-4">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Numero de paginas</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Email de Editorial</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($resultRec as $item)
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->ISBN}}</td>
                            <td>{{$item->Titulo}}</td>
                            <td>{{$item->Autor}}</td>
                            <td>{{$item->No_paginas}}</td>
                            <td>{{$item->Editorial}}</td>
                            <td>{{$item->Email_editorial}}</td>
                            <td>
                            <a href="{{route('Editar.edit', $item->id)}}" class="btn btn-warning">Editar</a>
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ModalEliminar{{$item->id}}">
            <i class="bi bi-x-circle-fill"></i> Eliminar</button>
</button> 
                            </td>

                        </tr>
@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
    <!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
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

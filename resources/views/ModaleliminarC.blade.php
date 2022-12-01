@if (session()->has('Eliminacion'))

{!! "<script>
    Swal.fire(
        'Se elimino compa',
        ':)',
        'success'
    )

</script>" !!}

@endif
@foreach ($resultRec as $item)

<div class="modal fade" id="ModaleliminarC {{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="ModaleliminarC {{$item->id}}" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-dark">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-dark">¿Desea eliminar este libro?</h4>

                <div class="text-dark">
                    <p class="fw-bold">nombre: {{$item->nombre}}</p>
                    <p class="fw-bold">email: {{$item->correo}}</p>
                    <p class="fw-bold">no_serie_ine: {{$item->no_serie_ine}}</p>


                </div>

            </div>
            <div class="modal-footer">
                <form method="post" action="{{route('Clientes.destroy',$item->id)}}">
                    <button type="submit" class="btn btn-primary">Si, eliminalo</button>
                    @csrf
                    @method('delete')
                </form>

                <a href="TClientes" class="btn btn-danger">No, no lo elimines</a>
            </div>

        </div>

    </div>

</div>
@endforeach

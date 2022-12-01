<!-- Modal -->
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

<div class="modal fade" id="ModalEliminar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="ModalEliminar{{$item->id}}" aria-hidden="true">

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
                    <p class="fw-bold">ISBN: {{$item->ISBN}}</p>
                    <p class="fw-bold">Titulo: {{$item->Titulo}}</p>
                    <p class="fw-bold">Autor: {{$item->Autor}}</p>
                    <p class="fw-bold">No. Paginas: {{$item->No_paginas}}</p>
                    <p class="fw-bold">Editorial: {{$item->Editorial}}</p>
                    <p class="fw-bold">Email: {{$item->Email_editorial}}</p>
                </div>

            </div>
            <div class="modal-footer">
                <form method="post" action="{{route('Libros.destroy',$item->id)}}">
                    <button type="submit" class="btn btn-primary">Si, eliminalo</button>
                    @csrf
                    @method('delete')
                </form>

                <a href="{{route('Libros.index')}}" class="btn btn-danger">No, no lo elimines</a>
            </div>

        </div>

    </div>

</div>
@endforeach

@extends('plantillas.admin')

@section('content')
    <div class="row mx-auto">
        <div class="w-100 text-center" style="margin-top: -25rem;">
            <p>
                CUIDADO! SI BORRAS ESTA MARCA, ELIMINARAS TODAS LAS ZAPATILLAS QUE PERTENESCÁN A ESTA,
                ESTAS SEGURO DE TOMAR ESTA DECISIÓN?
            <p>
            <form action="/marcas/{{$marca->id}}" method="post">
                @csrf @method('delete')
                <button class="btn btn-danger w-25">ELIMINAR</button>
            </form>
        </div>
    </div>
@endsection


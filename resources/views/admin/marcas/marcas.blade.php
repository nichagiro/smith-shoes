@extends('plantillas.admin')

@section('content')
@include('plantillas.errors.error')
@include('plantillas.success.succes') 
    <div class="row mx-auto">
        <div class="w100 mb-2">
            <button class="btn btn-info" data-toggle="modal" data-target="#crearModal">Crear Marca</button>
        </div>
        <div class="table-responsive">
            <table class="table">
                <caption>Lista de marcas</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Accion</th>
                    </tr>  
                </thead>
                <tbody>
                    @foreach ($marcas as $marca)
                        <tr>
                            <th scope="row">{{$marca->id}}</th>
                            <td>
                                <form action="/marcas/{{$marca->id}}" method="POST">
                                    @method('PUT') @csrf
                                    <input type="text" name="nombre" value="{{$marca->name_marca}}" class="form-control w-100">
                            </td>
                            <td class="d-flex justify-content-left">
                                <button type="submit" class="btn btn-success"> Actualizar</button>
                                </form>
                                <form action="/marcas/{{$marca->id}}" method="get" class="ml-2">
                                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="/marcas" method="POST">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva Marca</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="marca" class="form-control" placeholder="Escriba el nombre">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


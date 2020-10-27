@extends('plantillas.admin')

@section('content')
    @include('plantillas.errors.error')
    @include('plantillas.success.succes')
    <div class="row">
        <div class="text-center w-100">
            <button class="btn btn-danger col-sm-12 col-md-4" data-toggle="modal" data-target="#deleteModal">Eliminar</a>
        </div>
        @foreach ($zapatillas as $zapatilla)   
            <div class="col-md-4 col-sm-12 mt-2 mx-auto">
                <div class="card border-bottom-success">
                    <img src=" {{asset('img/zapatillas/'.$zapatilla->photo)}} " class="card-img-top" alt="Smith Shoes" style="max-height: 400px;">
                    <div class="card-body">
                        <form action="/tienda/{{$zapatilla->id}}" method="post"  enctype="multipart/form-data">
                            @csrf  @method('PUT')
                            <div class="card-text text-center"> 
                                <div class="row">
                                    <div class="col-6">
                                        <small>Nombre</small>
                                        <input name="nombre" type="text" value="{{$zapatilla->name_zapatilla}}" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <small>Marca</small>
                                        <div class="custom-file">
                                            <select class="custom-select" name="marca">
                                                <option value="{{$zapatilla->id_marca}}" selected> {{$zapatilla->name_marca}} </option>
                                                @foreach ($marca as $marcas)
                                                    @if ($marcas->id != $zapatilla->id_marca)
                                                        <option value="{{$marcas->id}}"> {{$marcas->name_marca}} </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <small>Imagen</small>
                                        <div class="custom-file">
                                            <input name="imagen" type="file" class="custom-file-input" id="customFileLang" lang="es">
                                            <label class="custom-file-label" for="customFileLang"> screach..</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success mt-3 w-100" >
                                    Confirmar cambios
                                </button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal delete -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="/tienda/{{$zapatilla->id}}" method="POST">
                    @csrf @method('delete')
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Seguro que desea eliminar esta zapatilla</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
    @endsection


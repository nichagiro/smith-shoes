@extends('plantillas.admin')

@section('content')
    @include('plantillas.errors.error')
    @include('plantillas.success.succes')
    <div class="row">
        <div class="col-md-4 col-sm-12 mt-3 mx-auto">
            <div class="card border-bottom-info">
                <img src="{{asset('img/zapatillas/new zapatilla.jpg')}} " class="card-img-top" alt="Smith Shoes" style="max-height: 400px;">
                <div class="card-body">
                    <form action="/tienda"  method="post"  enctype="multipart/form-data">
                        @csrf  
                        <div class="card-text text-center"> 
                            <div class="row">
                                <div class="col-6">
                                    <small>Nombre</small>
                                    <input name="nombre" type="text"  class="form-control" >
                                </div>
                                <div class="col-6">
                                    <small>Marca</small>
                                    <div class="custom-file">
                                        <select name="marca" class="custom-select" >
                                            <option value="" selected> Seleccione </option>
                                            @foreach ($marcas as $marca)
                                                <option value="{{$marca->id}}"> {{$marca->name_marca}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <small>foto</small>
                                    <div class="custom-file">
                                        <input name="foto" type="file" class="custom-file-input" id="customFileLang" lang="es" >
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
    </div>
@endsection


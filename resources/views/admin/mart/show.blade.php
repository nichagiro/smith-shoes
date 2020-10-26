@extends('plantillas.admin')

@section('content')
    @include('plantillas.errors.error')
    @include('plantillas.success.succes')
    <div class="row">
        @foreach ($zapatillas as $zapatilla)   
            <div class="col-md-4 col-sm-12 mt-3 mx-auto">
                <div class="card border-bottom-success">
                    <img src=" {{asset('img/zapatillas/'.$zapatilla->photo)}} " class="card-img-top" alt="Smith Shoes" style="max-height: 400px;">
                    <div class="card-body">
                        <form action="/{{$zapatilla->id}}" method="post"  enctype="multipart/form-data">
                            @csrf  @method('PUT')
                            <div class="card-text text-center"> 
                                <div class="row">
                                    <div class="col-6">
                                        <small>Nombre</small>
                                        <input name="name_zapatilla" type="text" value="{{$zapatilla->name_zapatilla}}" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <small>Marca</small>
                                        <div class="custom-file">
                                            <select class="custom-select">
                                                <option value="{{$zapatilla->id_marca}}" selected> {{$zapatilla->name_marca}} </option>
                                                @foreach ($marca as $marcas)
                                                    <option value="{{$marcas->id}}"> {{$marcas->name_marca}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <small>Imagen</small>
                                        <div class="custom-file">
                                            <input name="photo" type="file" class="custom-file-input" id="customFileLang" lang="es">
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
        @endforeach
    </div>
    @endsection


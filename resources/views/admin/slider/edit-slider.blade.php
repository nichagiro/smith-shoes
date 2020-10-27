@extends('plantillas.admin')

@section('content')
    @include('plantillas.errors.error')
    @include('plantillas.success.succes')
    <div class="row">
        <div class="col-md-4 col-sm-12 mt-3 mx-auto">
            <div class="card border-left-success">
                <img src=" {{asset('img/slider/'.$zapatilla->photo)}} " class="card-img-top" alt="Smith Shoes" style="max-height: 400px;">
                <div class="card-body">
                    <form action="/slider/{{$zapatilla->id}}" method="post"  enctype="multipart/form-data">
                        @csrf  @method('PUT')
                        <div class="card-text text-center"> 
                            <div class="row">
                                <div class="col-6">
                                    <small>Nombre</small>
                                    <input name="nombre" type="text" value="{{$zapatilla->name_zapatilla}}" class="form-control">
                                </div>
                                <div class="col-6">
                                    <small>Imagen</small>
                                    <div class="custom-file">
                                        <input name="imagen" type="file" class="custom-file-input" id="customFileLang" lang="es">
                                        <label class="custom-file-label" for="customFileLang"> imagen</label>
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


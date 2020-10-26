@extends('plantillas.admin')

@section('content')
@include('plantillas.errors.error')
@include('plantillas.success.succes')
    <div class="row mx-auto">
        <div class="text-center w-100">
            <a href="/tienda/create" class="btn btn-info w-25">Crear</a>
        </div>
        @foreach ($zapatilla as $zapatillas)
            <div class="col-md-4 col-sm-12 mt-3">
                <div class="card border-left-success">
                    <img src="{{asset('img/zapatillas/'.$zapatillas->photo)}}" class="card-img-top" alt="Smith Shoes" style="max-height:300px;">
                    <div class="card-body">
                        <div class="card-text text-center"> {{$zapatillas->name_zapatilla}} 
                            <a href="/tienda/{{$zapatillas->id}}">
                                <i class="fas fa-pencil-alt ml-3"></i>
                            </a>
                        </div> 
                    </div> 
                </div>
            </div>
        @endforeach
        <div class="w-100 mt-3">
            <div class="mx-auto d-flex justify-content-center">
                {{$zapatilla->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
@endsection


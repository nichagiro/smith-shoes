@extends('plantillas.admin')

@section('content')
    <div class="row mx-auto">
        @foreach ($zapatillas as $zapatilla)
            <div class="col-md-4 col-sm-12 mt-3">
                <div class="card border-left-success">
                    <img src=" {{asset('img/slider/'.$zapatilla->photo)}}" class="card-img-top" alt="Smith Shoes" style="max-height:300px;">
                    <div class="card-body">
                        <div class="card-text text-center"> {{$zapatilla->name_zapatilla}} 
                            <a href="slider/{{$zapatilla->id}}">
                                <i class="fas fa-pencil-alt ml-3"></i>
                            </a>
                        </div> 
                    </div> 
                </div>
            </div>
        @endforeach

@endsection


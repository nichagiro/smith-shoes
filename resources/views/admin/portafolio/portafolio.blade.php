@extends('plantillas.admin')

@section('content')
    <div class="row mx-auto">
        @foreach ($photo as $photos)
            <div class="col-md-4 col-sm-12 mt-3"  data-toggle="modal" data-target="#exampleModal">
                <div class="card border-left-success">
                    <img src=" {{asset('img/portafolio/'.$photos->photo)}}" class="card-img-top" alt="Smith Shoes" style="max-height:300px;">
                    <div class="card-body">
                        <div class="card-text text-center"> {{$photos->name_zapatilla}} 
                            <a href="photos6/{{$photos->id}}">
                                <i class="fas fa-pencil-alt ml-3"></i>
                            </a>
                        </div> 
                    </div> 
                </div>
            </div>
        @endforeach

@endsection


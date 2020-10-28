@extends('plantillas.menu')
@section('contenido')
    <!-- Header Starts -->
    <section id="Banner" class="content-section" style="height: 60vh;">
        <div class="container content-wrap text-center">
            <h1>Las mejores marcas</h1>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- Header Ends -->
    <!-- Acerca de nosotros -->
    <div id="About" class="container my-3">
        <div class="w-100">
            <form action="/shop" method="post">
                @csrf
                <small>Filtrar zapatillas</small>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="custom-file">
                            <select name="filtro" class="custom-select">
                                <option value="0" selected>  Todas  </option>
                                @foreach ($marcas as $marca)
                                    <option  value="{{$marca->id}}"> {{$marca->name_marca}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <button class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row mt-1">
            @foreach ($zapatillas as $zapatilla)
                <div class="col-sm-12 col-md-3 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('img/zapatillas/'.$zapatilla->photo)}}" class="card-img-top" alt="smith shoes" height="250px;">
                            {{-- <h5 class="card-title text-center mt-"> {{$zapatilla->name_zapatilla}} </h5> --}}
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ url ("https://wa.me/573138117901?text=me%20interesa%20los%20{$zapatilla->name_zapatilla}")}}" target="_blank"  class="btn btn-info">Cotizar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4 w-100 d-flex justify-content-center">
            {{$zapatillas->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection


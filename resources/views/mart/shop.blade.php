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
        <div class="row">
            @foreach ($zapatillas as $zapatilla)
                <div class="col-sm-12 col-md-3 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('img/'.$zapatilla->photo)}}" class="card-img-top" alt="...">
                            <h5 class="card-title text-center mt-"> {{$zapatilla->name_zapatilla}} </h5>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ url ("https://wa.me/573138117901?text=me%20interesa%20los%20{$zapatilla->name_zapatilla}")}}" target="_blank"  class="btn btn-info">Cotizar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        <div>
    </div>
@endsection


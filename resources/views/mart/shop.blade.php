@extends('plantillas.menu')
{{-- META TAGS --}}
@section('keywords','zapatillas, zapatillas para niñas, zapataillas nike, zapatillas adidas, zapatillas puma')
@section('description','venta de zapatillas para niñas, niños y adultos, zapatillas nike, zapatillas puma, zapatillas adidas, zapatiilas de marca y para toda ocacion, gran variedad de zapatillas en diseño y color.')
@section('subject','tienda de zapatillas')
@section('author','CISDE')
@section('copyright','© CISDE')
@section('language','es')
@section('revisit-after','1 month')
@section('robots','index, follow')
@section('Content-Type','text/html; charset=ISO-8859-1')
@section('tittle','zapatillas')    
{{-- META TAGS --}}
@section('contenido')
    <!-- Header Starts -->
    <section id="" class="fondo-shop" style="height: 60vh;">
        <div class="d-flex align-items-center justify-content-center content-wrap text-center items-shop">
            <h1>
                {{$marcaSelect}}  
            </h1>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- Header Ends -->
    <!-- Acerca de nosotros -->
    <div id="About" class="container my-3">
        <h2> Zapatillas de moda</h2>
        <div class="w-100">
            <form action="/shop" method="post">
                @csrf
                <small>Filtrar zapatillas</small>
                <div class="row">
                    <div class="col-md-4 mb-2 col-sm-4">
                        <div class="custom-file">
                            <select name="filtro" class="custom-select">
                                <option value="0" selected>  Todas  </option>
                                @foreach ($marcas as $marca)
                                    <option  value="{{$marca->id}}"> {{$marca->name_marca}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 ">
                        <button class="btn btn-primary">Filtrar</button>
                        <a href="/" class="btn btn-info">Inicio</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="row mt-1">
            @foreach ($zapatillas as $zapatilla)
                <div class="col-sm-12 col-md-3 mt-3">
                    <div class="card border-bottom-info">
                        <img src="{{asset('img/zapatillas/'.$zapatilla->photo)}}" class="card-img-top" alt="smith shoes" height="250px;">
                        <div class="card-footer text-center">
                            <a href="{{ url ("https://wa.me/573138117901?text=me%20interesa%20los%20{$zapatilla->name_zapatilla}")}}" target="_blank"  class="btn btn-info w-100">Cotizar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-100 mt-3">
            <div class="mx-auto d-flex justify-content-center">
                {{$zapatillas->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
@endsection


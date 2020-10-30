<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- METAS --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="zapatillas, zapatillas para niñas, zapataillas nike, zapatillas adidas, zapatillas puma">
        <meta name="description" content="venta de zapatillas para niñas, niños y adultos, zapatillas nike, zapatillas puma, zapatillas adidas, zapatiilas de marca y para toda ocacion, gran variedad de zapatillas en diseño y color.">
        <meta name="subject" content="tienda de zapatillas">
        <meta name="author" content="CISDE">
        <meta name="copyright" content="© CISDE"/>
        <meta name="language" content="es"/>
        <meta name="revisit-after" content="1 month"/>
        <meta name="robots" content="index, follow"/>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title>Zapatillas</title>
        {{-- FAVICON --}}
        <link rel="icon" href="{{asset('img/smith shoes-cisde.png')}}" type="image/png">	
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
        <!--stylesheet-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/custom-responsive-styles.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- Navigation -->
        <a class="menu-toggle rounded" href="#">
            <i class="fa fa-bars"></i>
        </a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="smooth-scroll" href="#Header"></a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#home">Inicio</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#About">Servicios</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#Services">Nuestras Marcas</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#Portfolio">Portfolio</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#Testimonials">Los mas vendidos</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#Contact">Contactenos</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="" href="/shop">Tienda</a>
            </li>
            </ul>
        </nav>
        <!-- Header Starts -->
        <section id="home" class="fondo-inicial">
            <div class="content-wrap text-center items-inicial">
                <div class="w-100">
                    <img src="{{asset('img/smith shoes-cisde.png')}}" alt="smith shoes" height="300px;">
                </div>
                <h1>Zapatillas</h1>
                <div>
                    <em>Estilo, Calidad y Comodidad</em>
                </div>
                <a class="btn btn-info btn-xl" href="/shop">Tienda</a>
            </div>
            <div class="overlay"></div>
        </section>
        <!-- Header Ends -->
        <div class="w-100 mt-3">
            <div class="mx-auto w-75" style="margin: auto;">
                @include('plantillas.errors.error')
                @include('plantillas.success.succes')
            </div>
        </div>
        <!-- Acerca de nosotros -->
        <section id="About" class="content-section">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-heading">
                            <h2>Zapatillas de moda</h2> 
                        </div>
                        <div class="">
                            Somos fabricántes y mayoristas de calzado deportivo. zapatillas de marca, como lo son:
                            las <strong>zapatillas nike</strong> y <strong>zapatillas puma</strong>; tenemos gran variedad de zapatillas para todo publico:
                            calzado para dama, calazado para niñas, calzado para niños, etc.
                        <div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Acerca de nosotros -->
        <section id="Services" class="content-section text-center">
            <div class="container">
                <div class="block-heading">
                    <h3> Calzado deportivo</h3>
                    <div class="d-flex justify-content-center">
                        <p class="mr-3">Zapatillas Puma,</p>
                        <p class="mr-3">Zapatillas Adidas,</p>
                        <p>Zapatillas Nike.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box">
                            <div class="service-icon yellow">
                            <div class="front-content text-white">
                                <img src="{{asset('img/icon-puma.png')}}" alt="smith shoes">
                                <p class="mt-4" style="font-size: 2rem;">PUMA</p>
                            </div>
                            </div>
                            <div class="service-content">
                                <img class="content-image img-fluid" src="{{asset('img/puma.jpg')}}" alt="smith shoes">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box">
                            <div class="service-icon orange">
                                <div class="front-content text-white">
                                    <img src="{{asset('img/icon-adidas.png')}}" alt="smith shoes">
                                    <p class="mt-4" style="font-size: 2rem;">ADIDAS</p>
                                </div>
                            </div>
                            <div class="service-content">
                                <img class="content-image img-fluid" src="{{asset('img/adidas.jpg')}}" alt="smith shoes">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box ">
                            <div class="service-icon red">
                                <div class="front-content text-white">
                                    <img src="{{asset('img/icon-nike.png')}}" alt="smith shoes">
                                    <p class="mt-4" style="font-size: 2rem;">NIKE</p>
                                </div>
                            </div>
                            <div class="service-content">
                                <img class="content-image img-fluid" src="{{asset('img/nike.jpg')}}" alt="smith shoes">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- ZAPATILLAS DE MODA --}}
        <section class="content-section text-center" id="Portfolio">
            <div class="container">
                <div class="block-heading">
                    <h2>Zapatillas de moda</h2>
                    <p>
                        Gran variedad de zapatillas a la moda, zapatillas deportivas ideales para ir al gimnacio, 
                        <strong>calzado</strong> fino  y duradero; zapatillas con estilo y buen diseño.
                    </p>
                </div>
                <div class="portfolio-wrapper clearfix">
                    @foreach ($portafolio as $zapatilla)       
                        <a class="each-portfolio" data-fancybox="gallery" href="{{ url ("img/portafolio/{$zapatilla->photo}")}}">
                            <div class="content hover-cont-wrap">   
                                <div class="content-overlay"></div>
                            <img class="content-image" src="{{asset('img/portafolio/'.$zapatilla->photo)}}" style="height:300px;" alt="smith shoes">
                                <div class="content-details fadeIn-bottom">
                                    <span class="zoom"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- LOS MAS VENDIDOS -->
        <section id="Testimonials" class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-heading">
                            <h2>Venta de zapatillas</h2>
                            <p>Por su diseño, estilo y economia la gente los más prefiere.</p>
                        </div>
                        <div id="customers-testimonials" class="owl-carousel sin-link">
                            @foreach ($slider as $sliders)
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="img-circle" src="{{asset('img/slider/'.$sliders->photo)}}" alt="smith shoes">
                                        {{-- <p>$250.000</p> --}}
                                    </div>
                                    <a target="_blank" href="{{ url ("https://wa.me/+573138117901?text=me%20interesa%20la%20la%20zapatilla%20{$sliders->name_zapatilla}")}}">
                                        <div class="testimonial-name ">Comprar</div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!-- END OF TESTIMONIALS -->
        <section id="Contact" class="content-section">
            <div class="container">
                <div class="block-heading">
                    <h2>SMITH SHOES</h2>
                    <p>
                        Contáctenos, por medio de nuestro botón de WhatsApp, nuestro formulario por correo,
                        llamada telefónica y redes sociales.                    
                    </p>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="contact-wrapper">
                            <div class="address-block border-bottom">
                                <h3 class="add-title">Envianos un mensaje</h3>
                                <a href="tel:+573138117901">
                                    <div class="c-detail">
                                        <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span class="c-info">+57 313 811 7901</span>
                                    </div>
                                </a>
                                <a href="mailto:calzado@smithshoes.com">
                                    <div class="c-detail">
                                        <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span class="c-info">calzado@smithshoes.com</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-wrap">
                            <form action="/sendForm" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <small>Nombre</small>
                                        <input type="text" class="form-control" name="nombre" />
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <small>Email</small>
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                </div>
                                <div>
                                    <small>Telefono</small>
                                    <input type="tel" class="form-control" name="telefono" />
                                </div>
                                <div>
                                    <small>Mensaje</small>
                                    <textarea type="text" class="form-control" name="mensaje"></textarea>
                                </div>
                                <div class="mt-3 mb-3 d-flex justify-content-center">
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="privacidad">
                                    </div>
                                    <div>
                                        <a href="/politica-privacidad"> Acepto los terminos de manejo de datos</a>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button type="submit">enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        @include('plantillas.components.whatsapp')


        <footer class="footer text-center">
            <div class="container">
                <ul class="list-inline">
                    <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/smithshoes1" target="_blank">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://www.facebook.com/smithshoes1" target="_blank">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="https://cisde.co/" target="_blank">
                <p class="text-muted small mb-0">Copyright © CISDE 2020</p>
            </a>
        </footer> 
        
    <!-- scripts -->
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/all-plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins-activate.js')}}"></script>

    </body>
</html>

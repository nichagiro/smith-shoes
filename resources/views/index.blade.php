<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zapatillas de moda</title>
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
        <div class="logo">
            <img src="{{asset('img/log.jpg')}}" alt=""><span>Smith Shoes</span></i>
        </div>
        <a class="menu-toggle rounded" href="#">
            <i class="fa fa-bars"></i>
        </a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="smooth-scroll" href="#Header"></a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#page-top">Home</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#About">About</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#Services">Services</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#Portfolio">Portfolio</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#Testimonials">Testimonials</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="smooth-scroll" href="#Contact">Contact</a>
            </li>
            </ul>
        </nav>
        <!-- Header Starts -->
        <section id="Banner" class="content-section">
            <div class="container content-wrap text-center">
            <h1>Zapatillas de moda</h1>
            <h2>
                <em>Estilo, Calidad y Comodidad</em>
            </h2>
            <a class="btn btn-primary btn-xl smooth-scroll" href="#About">Comprar</a>
            </div>
            <div class="overlay"></div>
        </section>
        <!-- Header Ends -->
        <!-- Acerca de nosotros -->
        <section id="About" class="content-section">
            <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                <div class="block-heading">
                    <h2>Acerca de nosotros</h2>
                </div>
                <p class="lead">Somos fabricantes y mayoristas de calzado deportivo</p>
                </div>
            </div>
            </div>
        </section>
        <!-- Acerca de nosotros -->
        <section id="Services" class="content-section text-center">
            <div class="container">
                <div class="block-heading">
                    <h2> Nuestras Marcas</h2>
                    <p>Lo mejor en calzado deportivo</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box">
                            <div class="service-icon yellow">
                            <div class="front-content text-white">
                                <i class="fa fa-star fa-3x"></i>
                                <h3 class="mt-4">PUMA</h3>
                            </div>
                            </div>
                            <div class="service-content">
                                <img class="content-image img-fluid" src="{{asset('img/nike red.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box">
                            <div class="service-icon orange">
                                <div class="front-content text-white">
                                    <i class="fa fa-star fa-3x"></i>
                                    <h3 class="mt-4">ADIDAS</h3>
                                </div>
                            </div>
                            <div class="service-content">
                                <img class="content-image img-fluid" src="{{asset('img/nike red.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box ">
                            <div class="service-icon red">
                                <div class="front-content text-white">
                                    <i class="fa fa-star fa-3x"></i>
                                    <h3 class="mt-4">NIKE</h3>
                                </div>
                            </div>
                            <div class="service-content">
                                <img class="content-image img-fluid" src="{{asset('img/nike red.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- PRODCUTOS DE CALIDAD --}}
        <section class="content-section text-center" id="Portfolio">
            <div class="container">
                <div class="block-heading">
                    <h2>Productos de calidad</h2>
                    <p>Gran variedad y diseños a la moda</p>
                </div>
                <div class="portfolio-wrapper clearfix">
                    <a class="each-portfolio" data-fancybox="gallery" href="img/nike red.jpg">
                        <div class="content hover-cont-wrap">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="{{asset('img/nike red.jpg')}}">
                            <div class="content-details fadeIn-bottom">
                                <span class="zoom"><i class="fa fa-search-plus"></i></span>
                            </div>
                        </div>
                    </a>
                    <a class="each-portfolio" data-fancybox="gallery" href="img/nike red.jpg">
                        <div class="content hover-cont-wrap">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="{{asset('img/nike red.jpg')}}">
                            <div class="content-details fadeIn-bottom">
                                <span class="zoom"><i class="fa fa-search-plus"></i></span>
                            </div>
                        </div>
                    </a>
                    <a class="each-portfolio" data-fancybox="gallery" href="img/nike red.jpg">
                        <div class="content hover-cont-wrap">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="{{asset('img/nike red.jpg')}}">
                            <div class="content-details fadeIn-bottom">
                                <span class="zoom"><i class="fa fa-search-plus"></i></span>
                            </div>
                        </div>
                    </a>
                    <a class="each-portfolio" data-fancybox="gallery" href="img/nike red.jpg">
                        <div class="content hover-cont-wrap">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="{{asset('img/nike red.jpg')}}">
                            <div class="content-details fadeIn-bottom">
                                <span class="zoom"><i class="fa fa-search-plus"></i></span>
                            </div>
                        </div>
                    </a>
                    <a class="each-portfolio" data-fancybox="gallery" href="img/nike red.jpg">
                        <div class="content hover-cont-wrap">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="{{asset('img/nike red.jpg')}}">
                            <div class="content-details fadeIn-bottom">
                                <span class="zoom"><i class="fa fa-search-plus"></i></span>
                            </div>
                        </div>
                    </a>
                    <a class="each-portfolio" data-fancybox="gallery" href="img/nike red.jpg">
                            <div class="content hover-cont-wrap">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="{{asset('img/nike red.jpg')}}">
                            <div class="content-details fadeIn-bottom">
                                <span class="zoom"><i class="fa fa-search-plus"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- LOS MAS VENDIDOS -->
        <section id="Testimonials" class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-heading">
                            <h2>Los mas vendidos</h2>
                            <p>Por su diseño, estilo y economia la gente los mas prefiere</p>
                        </div>
                        <div id="customers-testimonials" class="owl-carousel sin-link">
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-circle" src="{{asset('img/nike red.jpg')}}">
                                    <p>$250.000</p>
                                </div>
                                <a href="https://wa.me/+573138117901">
                                    <div class="testimonial-name ">Comprar</div>
                                </a>
                            </div>
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-circle" src="{{asset('img/nike red.jpg')}}">
                                    <p>$250.000</p>
                                </div>
                                <a href="https://wa.me/+573138117901">
                                    <div class="testimonial-name">Comprar</div>
                                </a>
                            </div>
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-circle" src="{{asset('img/nike red.jpg')}}">
                                    <p>$250.000</p>
                                </div>
                                <a href="https://wa.me/+573138117901">
                                    <div class="testimonial-name">Comprar</div>
                                </a>
                            </div>
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-circle" src="{{asset('img/nike red.jpg')}}">
                                    <p>$250.000</p>
                                </div>
                                <a href="https://wa.me/+573138117901">
                                    <div class="testimonial-name">Comprar</div>
                                </a>
                            </div>
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-circle" src="{{asset('img/nike red.jpg')}}">
                                    <p>$250.000</p>
                                </div>
                                <a href="https://wa.me/+573138117901">
                                    <div class="testimonial-name">Comprar</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF TESTIMONIALS -->
        <section id="Contact" class="content-section">
            <div class="container">
                <div class="block-heading">
                    <h2>Contactenos !</h2>
                    <p>
                        Digite los datos del formulario e inmediatamente mande el mensaje; nos estaremos comunicando
                        lo mas pronto posible
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
                                <div class="fname floating-label">
                                    <input type="text" class="floating-input" name="name" />
                                    <label for="title">Nombre Completo</label>
                                </div>
                                <div class="email floating-label">
                                    <input type="email" class="floating-input" name="email" />
                                    <label for="email">Correo</label>
                                </div>
                                <div class="contact floating-label">
                                    <input type="tel" class="floating-input" name="tel" />
                                    <label for="email">Telefono</label>
                                </div>
                                <div class="company floating-label">
                                    <textarea type="text" class="floating-input" name="msg"></textarea>
                                    <label for="email">Mensaje</label>
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

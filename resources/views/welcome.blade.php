<!DOCTYPE html>
<html>
    <head>
        <title>Lexus Tours</title>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="ico" href="favicon.ico">
        <!--CARGA DE FUENTES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i" rel="stylesheet" type="text/css">
        <!--CARGA ARCHIVO OWL CAROUSEL -->
        {!! Html::style('/assets/css/owl.carousel.min.css') !!} 
        {!! Html::style('/assets/css/owl.theme.default.min.css') !!}
        <!--CARGA ARCHIVO FLEXSLIDER -->
        {!! Html::style('/assets/css/flexslider.css') !!} 
        {!! Html::script('/assets/js/jquery.flexslider.js') !!}        
        <!--CARGA ARCHIVO ICONOS -->
         {!! Html::style('/assets/css/fontawesome-all.css') !!}
        <!--CARGA ARCHIVO CSS -->
        {!! Html::style('/assets/css/bootstrap.css') !!}
        {!! Html::style('/assets/css/animate.min.css') !!}
        {!! Html::style('/assets/css/estilos.css') !!}

        
    </head>
    <body class="pag-ini">
        <section class="bienvenido">
            <header class="encabezado navbar-fixed-top" role="banner" id="enc">
                <div class="container-fluid">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ url('/assets/img/lexus.png') }}" alt="logo empresa">
                    </a>

                    <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                        <nav id="menu-principal" class="collapse">                            
                            <ul>
                                <li class= "active"><a href="{{ url('/') }}">Inicio</a></li>
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hoteles</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('2h/margarita') }}">Isla Margarita</a> 
                                        <a class="dropdown-item" href="{{ url('2h/coche') }}">Isla de Coche</a>
                                        <!--a class="dropdown-item" href="#">Los Roque</a>
                                        <a class="dropdown-item" href="#">Caracas</a>   
                                        <a class="dropdown-item" href="#">Canaima</a-->  
                                    </div>
                                </li>
                                <li @yield('m2')><a href="{{ url('3d/destino') }}">Destinos</a></li>                        
                                <li @yield('m3')><a href="{{ url('4e/excurciones') }}">Excursiones</a></li> 
                                <li @yield('m4')><a href="#">Blog</a></li>
                                <li @yield('m5')><a href="{{ url('contacto-nosotros/nosotros') }}">Nosotros</a></li>
                                <li @yield('m6')><a href="{{ url('contacto-nosotros/contacto') }}">Contacto</a></li>                       
                            </ul>
                        </nav>
                        
                       <!-- { { url('4e/excurciones') }}
                        { { url('5b/blog') }}-->      
                </div>
            </header>
        </section>

        <section class="galeria">
            <div class="container-fluid">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">                   
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ url('/assets/img/principal/playaelagua.jpg') }}" alt="1">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-5 wow bounceInUp">Playa El Agua - Isla de Margarita</h2>                               
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('/assets/img/principal/salto.jpg') }}" alt="2">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-5 wow bounceInUp">Salto Angel</h2>                                
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('/assets/img/principal/Gran_Roque.jpg') }}" alt="3">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-5 wow bounceInUp">Gran Roque - Los Roques</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('/assets/img/principal/Juan_Griego.jpg') }}" alt="4">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-5 wow bounceInUp">Juan Griego - Isla Margarita</h2>
                                <h2 class="display-5 wow bounceInUp"></h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('/assets/img/principal/canaima.jpg') }}" alt="5">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-5 wow bounceInUp">Canaima</h2>
                            </div>
                        </div>
                         <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('/assets/img/principal/roques.jpg') }}" alt="2">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-5 wow bounceInUp">Los Roques</h2>                                
                            </div>
                        </div>
                    
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="far fa-arrow-alt-circle-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="far fa-arrow-alt-circle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div> 
            </div>
        </section> 
        <section class="p-y-2"></section>  

        <section class="hoteles p-y-3">      
            <div class="container">
                <h2 class="display-4 text-xs-center font-weight-bold bounceInUp">Hotelería</h2>
                    <div class="owl-carousel p-y-2">

                        <a href="{{ url('2h/margarita-hotel/wyndham') }}">
                            <div class="card">
                                <img class="card-img" src="{{ url('/assets/img/hotels/margarita/wyndham/wyn.jpg') }}" alt="Unik">
                                <div class="card-img-overlay">
                                    <h4 class="card-text" style="padding: 10px">Wyndham Concorde</h4>                                    
                                </div>
                            </div>                            
                        </a>

                        <a href="{{ url('2h/coche-hotel/sunsol_punta_blanca') }}">
                            <div class="card">
                                <img class="card-img" src="{{ url('/assets/img/hotels/2.jpg') }}" alt="Sunsol Punta Blanca">
                                <div class="card-img-overlay">
                                    <h4 class="card-text" style="padding: 10px">Sunsol Punta Blanca</h4>                                   
                                </div>
                            </div>                            
                        </a>

                        <a href="{{ url('2h/margarita-hotel/hesperia_eden_club') }}">
                            <div class="card">
                                <img class="card-img" src="{{ url('/assets/img/hotels/3.jpg') }}" alt="Hesperia Edén Club">
                                <div class="card-img-overlay">
                                    <h4 class="card-text" style="padding: 10px">Hesperia Edén Club</h4>                                    
                                </div>
                            </div>                                 
                        </a>

                        <a href="{{ url('2h/margarita-hotel/portofino') }}">
                            <div class="card">
                                <img class="card-img" src="{{ url('/assets/img/hotels/4.jpg') }}" alt="Portofino">
                                <div class="card-img-overlay">
                                    <h4 class="card-text" style="padding: 10px">Portofino</h4>
                                </div>
                            </div> 
                        </a>

                        <a href="{{ url('2h/margarita-hotel/sunsol_isla_caribe') }}">
                            <div class="card">
                                <img class="card-img" src="{{ url('/assets/img/hotels/5.jpg') }}" alt="Sunsol Isla Caribe">
                                <div class="card-img-overlay">
                                    <h4 class="card-text" style="padding: 10px">Sunsol Isla Caribe</h4>
                                </div>
                            </div>                                 
                        </a>

                        <a href="{{ url('2h/margarita-hotel/hesperia_isla_margarita') }}">
                            <div class="card">
                                <img class="card-img" src="{{ url('/assets/img/hotels/6.jpg') }}" alt="Hesperia Isla Margarita">
                                <div class="card-img-overlay">
                                    <h4 class="card-text" style="padding: 10px">Hesperia Isla Margarita</h4>
                                </div>
                            </div>
                        </a>

                    </div>
            </div> 
        </section>

        <section  class="p-y-1" ></section>

    <footer class="pie-de-pagina" role="contentinfo">
        <div class="container">
            <div class="row">               

                <div class="hidden-md-down col-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ url('/assets/img/avemarep.png') }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ url('/assets/img/ctene.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 offset-lg-3">
                            <img src="{{ url('/assets/img/buro.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <h3 class="titulo-modulo">Información de contacto</h3>
                    <p>Av. Bolívar, C.C. AB, Nivel PL, Ofic. 21, Playa El Angel, Pampatar, Isla Margarita</p>
                    <ul class="informacion-de-contacto"> 
                        <li>                       
                            <i class="fa fa-phone"></i>
                            <span>(+58)(295) 262-4933 / 7512</span> 
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <span>gerencia@lexustours.com</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <span>hoteles@lexustours.com</span>
                        </li>
                    </ul>
                    <ul class="redes-sociales">
                        <li><a href="#"><i class="fab fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="hidden-md-down col-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ url('/assets/img/mintur.png') }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ url('/assets/img/venezuela.png') }}" alt="">
                        </div>
                        <div class="col-lg-6  offset-lg-3">
                            <img src="{{ url('/assets/img/margarita.png') }}" alt="">
                        </div>                       
                    </div>
                </div>
                
            </div>
        </div>

        <section class="creditos">
            <div class="container">
                <div class="text-xs-center">
                    <p>Lexus Tours @2018 | Todos los derechos reservados | RIF: J-30554640-1 | RTN: 5020 - VT: 2335 - TTT: 653 - RTE: J154</p>
                </div>
            </div>
        </section>
    </footer>

    {!! Html::script('/assets/js/jquery.min.js') !!}
    {!! Html::script('/assets/js/bootstrap.min.js') !!}
    {!! Html::script('/assets/js/owl.carousel.min.js') !!}
    {!! Html::script('/assets/js/wow.min.js') !!}
        <script type="text/javascript">
            new WOW().init();
        </script>    
    {!! Html::script('/assets/js/smooth-scroll.min.js') !!}    
    {!! Html::script('/assets/js/codigos.js') !!}    
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoWidth: false,           
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            navText: ['<i class="fa fa-arrow-circle-left" title="Anterior"></i>', '<i class="fa  fa-arrow-circle-right" title="Siguiente"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2,
                    margin: 20
                },
                800: {
                    items: 3,
                    margin: 20
                },
                1000: {
                    items: 3,
                    margin: 20
                },
                1100: {
                    items: 4,
                    margin: 20
                }
            }
        })
    </script>   
           
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Excursiones - Lexus Tours</title>
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
        <!--CARGA ARCHIVO ICONOS -->
         {!! Html::style('/assets/css/fontawesome-all.css') !!}
        <!--CARGA ARCHIVO CSS -->
        {!! Html::style('/assets/css/bootstrap.css') !!} 
        {!! Html::style('/assets/css/animate.min.css') !!}       
        {!! Html::style('/assets/css/estilos.css') !!}
      
        
    </head>
    <body class="interna">
        <section class="bienvenido" style="height: 15vh">
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
                                <li @yield('m1')><a href="{{ url('/') }}">Inicio</a></li>
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
                                <li class= "active" ><a href="{{ url('4e/excurciones') }}">Excursiones</a></li> 
                                <li @yield('m4')><a href="#">Blog</a></li> 
                                <li @yield('m5')><a href="{{ url('contacto-nosotros/nosotros') }}">Nosotros</a></li>
                                <li @yield('m6')><a href="{{ url('contacto-nosotros/contacto') }}">Contacto</a></li>                         
                            </ul>
                        </nav>      
                </div>
            </header>

            <div class="texto-encabezado text-xs-center wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="container">
                    @yield('text')
                </div>
            </div>
        </section>

        <!-- contenedor de todo la informacion -->
        <main class="p-y-1 text-justify">
            <div class="container">
                <div class="row">
                    @yield('content')  
                </div> 
            </div>
        </main>
        
    <section class="tu-mejor-eleccion" style="margin-top: 2rem">
        <div class="container">          
             @yield('con1')  
        </div>
    </section>        

        <section class="container-fluid text-justify p-y-1">
            <div class="container galeria-hotel" style="padding-top: 3rem;">
                <div class="col-xs-12 text-xs-center">
                    <h2 class="font-weight-bold">GALERIA</h2>
                    <hr>
                </div> 
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">  
                      @yield('indicador')           
                    <div class="carousel-inner">
                        @yield('con2') 
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
        
        <section class="p-y-1">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h2>SOLICITA UNA COTIZACIÓN</h2>
                        <hr>
                    </div>
                    <div class="col-md-8 offset-md-2" style="font-size: .8rem;">
                        @include('form-emails')
                    </div>
                </div>
            </div>

        </section>

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
                                <i class="fa fa-phone"></i> (+58)(295) 262-4933 / 7512
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="#">gerencia@lexustours.com</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="#">hoteles@lexustours.com</a>
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
        {!! Html::script('/assets/js/wow.min.js') !!}               
        {!! Html::script('/assets/js/smooth-scroll.min.js') !!}    
        {!! Html::script('/assets/js/codigos.js') !!}   
        
    </body>
</html>
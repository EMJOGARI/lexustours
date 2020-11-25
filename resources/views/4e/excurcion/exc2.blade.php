@extends('layout-exc')

@section('text')<h2 class="display-4"></h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2 class="font-weight-bold">ISLA AVENTURA</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-8 offset-md-2">        
        <p>Cómodas unidades (van o autobuses) con guía profesional y conductor. Se comienza visitando La Asunción, su Catedral y el centro artesanal, El Castillo de Santa Rosa, continuando a la Basílica de la Virgen del Valle, de allí nos dirigimos hada la Laguna de la Restinga donde realizamos el paseo en lancha por los manglares. Parada para almorzar en Restaurante típico ubicado a orilla de la Playa donde podrán disfrutar alrededor de una hora de la misma. Luego, al regreso, disfrutaremos de uno de los encantos de la isla como son los atardeceres en Juan Griego.</p>
    </div>   

@endsection

@section('con1')
    <h2 class="h3 font-weight-bold">El Tour Incluye</h2> 
    <div class="row" style="margin-top: 2rem;">
        <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-left">            
            <li>
                <i class="fas fa-coffee" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Refrigerios durante la travesía</h4>
                </div>
            </li>
            <li>
                <i class="fas fa-utensils"></i>
                <div class="contenedor-eleccion">
                    <h4>Almuerzo en la playa</h4>
                </div>
            </li>
             <li>
                <i class="fas fa-beer"></i>
                <div class="contenedor-eleccion">
                    <h4>Bar abierto con bebidas Nacionales</h4>
                </div>
            </li>        
        </ul>    

        <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-right">
            <li>
                <i class="fas fa-bus" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Entrada al Parque Nacional la Restinga</h4>
                </div>
            </li>        
            <li>
                <i class="fas fa-ship" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Paseo en lancha por la Restinga</h4>
                </div>
            </li>        
        </ul>
    </div>
    <h3 class="h3 font-weight-bold p-y-2">Recomendaciones y Condiciones:</h3>
    <div class="condicion">
        <ul class="col-xs-12 col-lg-8 offset-lg-2">
            <li>
                <i class="far fa-check-square" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4 style="margin-left: 1rem;">Ropa ligera, toalla, vestido de baño, protector solar</h4>
                </div>
            </li>        
            <li>
                <i class="far fa-check-square" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4 style="margin-left: 1rem;">Niños: O a 3 años = Gratis / 4 a 11 años = 50 % descuento</h4>
                </div>
            </li>        
        </ul>        
    </div>
@endsection
@section('indicador')    
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol> 
@endsection 
@section('con2')    
    
    <div class="carousel-item active">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/aventura/aventura.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/aventura/aventura02.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/aventura/aventura03.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/aventura/aventura04.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/aventura/aventura05.jpg') }}">
    </div>                         
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'ISLA AVENTURA') !!} @endsection
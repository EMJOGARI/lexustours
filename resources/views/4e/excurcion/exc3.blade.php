@extends('layout-exc')

@section('text')<h2 class="display-4"></h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2 class="font-weight-bold">JEEP SAFARI</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-8 offset-md-2">        
        <p>Comenzamos en El Castillo de Santa Rosa en La Asunción. Atravesando el casco histórico de la Capital, llegaremos a este singular fortín para encontrarnos con parte de nuestra historia. Partiremos hacia El Valle del Espíritu Santo vía La Sierra donde apreciaremos una fabulosa vista de Porlamar .y Pampatar. Aquí conoceremos la hermosa Iglesia de La Virgen del Valle “Nuestra Patrona”. Luego daremos un paseo en bote en el Parque Nacional Laguna de La Restinga con sus “manglares”. En la tarde descubriremos La Península de Macanao (el desierto de Margarita), donde disfrutaremos de un almuerzo en una ranchería y nos bañaremos en las playas de Punta Arenas. Continuamos con “La Aventura 4x4 en el desierto. Haremos una breve parada en el Crucero de Macanao, donde podrán comprar chucherías o disfrutar de una deliciosa cocada (con o sin ron) al igual que utilizar los servicios sanitarios. Antes de retornar a los I hoteles visitamos el Fortín de La Galera en Juan Griego.</p>
    </div>   

@endsection

@section('con1')
    <h2 class="h3 font-weight-bold">El Tour Incluye</h2> 
    <div class="row" style="margin-top: 2rem;">
       <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-left">            
            <li>
                <i class="fas fa-coffee" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Refrescos y Agua Mineral</h4>
                </div>
            </li>
            <li>
                <i class="fas fa-utensils"></i>
                <div class="contenedor-eleccion">
                    <h4>Almuerzo, Frutas y Café</h4>
                </div>
            </li>
             <li>
                <i class="fas fa-beer"></i>
                <div class="contenedor-eleccion">
                    <h4>Bar abierto con bebidas Nacionales</h4>
                </div>
            </li>
            <li>
                <i class="far fa-sun" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Tiempo disponible de playa</h4>
                </div>
            </li>
        </ul>    

        <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-right">
            <li>
                <i class="fas fa-bus" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Excursión en vehículos 4x4</h4>
                </div>
            </li>        
            <li>
                <i class="fas fa-user" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Asistencia de conductor/guía</h4>
                </div>
            </li>
            <li>
                <i class="fas fa-ship" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Paseo en bote por la “Laguna de La Restinga</h4>
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
                    <h4 style="margin-left: 1rem;">Llevar toallas, protector solar, gorra, traje de baño.</h4>
                </div>
            </li> 
             <li>
                <i class="far fa-check-square" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4 style="margin-left: 1rem;">Niños de 3 a 11 años 50 % e infantes de O a 2 gratis.</h4>
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
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/jeep/jeep01.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/jeep/jeep02.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/jeep/jeep03.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/jeep/jeep04.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/jeep/jeep05.jpg') }}">
    </div> 
                          
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'JEEP SAFARI') !!} @endsection
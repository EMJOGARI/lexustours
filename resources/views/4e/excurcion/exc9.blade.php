@extends('layout-exc')

@section('text')<h2 class="display-4"></h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2 class="font-weight-bold">PASEO A CABALLO</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-8 offset-md-2">        
        <p>¿Sueña alguna vez con cabalgar por la orilla de una playa, descubrir paisajes vírgenes en un desierto tan insólito como la Península de Macanao, disfrutar de los encantos de un lugar desconocido? El Rancho Cabatucan, le ofrece una emocionante y agradable cabalgata a través de un espectacular escenario natural.</p>
        <p>El jinete descubrirá majestuosos paisajes desde las cimas de las montañas de Macanao, la aridez del paisaje con una vegetación xerófila y una vista espectacular sobre la Isla de Cubagua al sur y el Pico de San Francisco al norte. El itinerario le llevará más adelante a la orilla del mar, donde apreciarán desde su montura el contraste de las playas solitarias y de los tropicales bosques espinosos. Una experiencia inolvidable para niños y adultos, tanto para principiantes como para jinetes experimentados. Los caballos están en excelentes condiciones y reúnen todas las cualidades necesarias para permitir un paseo seguro y agradable. Usted recibirá instrucciones básicas antes de montar su caballo y se entregará un casco a cada participante. Nuestras excursiones son particularmente recomendadas para los principiantes. Los jinetes expertos recibirán un atención personalizada con la posibilidad de tener un caballo adaptado a su nivel y así disfrutar de un galope fuera del grupo.</p>
    </div>   

@endsection

@section('con1')
<h2 class="h3 font-weight-bold">El Paseo a Caballo Incluye</h2> 
<div class="row" style="margin-top: 2rem;">
    <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-left">            
        <li>
            <i class="fab fa-sticker-mule" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Instrucciones para cabalgar (al estilo americano)</h4>
            </div>
        </li>
        <li>
            <i class="far fa-clock"></i>
            <div class="contenedor-eleccion">
                <h4>Dos (2) horas de cabalgata (una hora en la montaña y una hora en la playa)</h4>
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
                <h4>Traslado hotel/rancho/hotel</h4>
            </div>
        </li>        
        <li>
            <i class="fas fa-user" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Servicios de nuestros guías</h4>
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
                <h4 style="margin-left: 1rem;">Nuestros guías se encargaran de llevar las cuerdas, los caballos montados por niños pequeños.</h4>
            </div>
        </li>        
        <li>
            <i class="far fa-check-square" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4 style="margin-left: 1rem;">Recomendamos llevar zapatos deportivos, pantalón largo y gorra. Peso máximo: 120kg.</h4>
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
    </ol> 
@endsection 
@section('con2')    
    
    <div class="carousel-item active">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/caballo/caballo01.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/caballo/caballo02.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/caballo/caballo03.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/caballo/caballo04.jpg') }}">
    </div>
         
@endsection 

@section('hidden'){!! Form::hidden('destino', 'PASEO A CABALLO') !!} @endsection
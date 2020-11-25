@extends('layout-exc')

@section('text')<h2 class="display-4"></h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2 class="font-weight-bold">ENCUENTRO CON DELFINES</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-8 offset-md-2">        
        <p>El Encuentro con delfines es una actividad diseñada específicamente para las personas que no cumplen con los requisitos de edad, estatura o movilidad necesarios para realizar el nado con delfines. Se realiza en una piscina de  menor profundidad y está enfocada en el contacto con los delfines.</p>
        <p>Se recomienda para familias o individuos cuyos. Miembros sean:</p>
        
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Menores de edad que no superen la estatura requerida para el nado con delfines</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Adultos mayores</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Niños y adultos especiales o con discapacidad</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Personas con problemas de movilidad</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Mujeres embarazadas</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Personas que no se sientan cómodas en aguas profundas</p>
    </div>   

@endsection

@section('con1')
<h2 class="h3 font-weight-bold">El Encuentro con Delfines Incluye</h2> 
<div class="row" style="margin-top: 2rem;">
    <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-left">            
        <li>
            <i class="fas fa-trophy" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Reserva confirmada</h4>
            </div>
        </li>
        <li>
            <i class="fas fa-trophy"></i>
            <div class="contenedor-eleccion">
                <h4>Charla introductoriaa</h4>
            </div>
        </li>
         <li>
            <i class="fas fa-trophy"></i>
            <div class="contenedor-eleccion">
                <h4>Chaleco salvavidas</h4>
            </div>
        </li>
        <li>
            <i class="fas fa-trophy" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Arrastre pectoral</h4>
            </div>
        </li>
    </ul>    

    <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-right">
        <li>
            <i class="fas fa-trophy" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Pass by</h4>
            </div>
        </li>        
        <li>
            <i class="fas fa-trophy" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Beso</h4>
            </div>
        </li>
        <li>
            <i class="fas fa-trophy" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Baños</h4>
            </div>
        </li>
        <li>
            <i class="fas fa-trophy" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Duchas</h4>
            </div>
        </li>
        <li>
            <i class="fas fa-trophy" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Locker</h4>
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
                <h4 style="margin-left: 1rem;">Traje de baño y tos, no usar ni cremas bloqueadoras ni lociones. No incluye traslados.</h4>
            </div>
        </li>        
        <li>
            <i class="far fa-check-square" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4 style="margin-left: 1rem;">No incluye traslados.</h4>
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
        <!--li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li-->
    </ol> 
@endsection 
@section('con2')    
    
    <div class="carousel-item active">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/nado/nado01.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/nado/nado02.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/nado/nado03.jpg') }}">
    </div>

    <!--div class="carousel-item">
        <img class="d-block w-100" src="{ { url('/assets/img/excursiones/nado/nado04.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{ { url('/assets/img/excursiones/nado/nado05.jpg') }}">
    </div-->                         
                
@endsection  

@section('hidden'){!! Form::hidden('destino', 'ENCUENTRO CON DELFINES') !!} @endsection
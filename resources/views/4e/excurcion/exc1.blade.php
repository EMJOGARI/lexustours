@extends('layout-exc')

@section('text')<h2 class="display-4"></h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2 class="font-weight-bold">TRASLADOS</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-8 offset-md-2">        
        <p>ESPERANDO INFORMACION</p>
 
    </div>   

@endsection

@section('con1')
    <h2 class="h3 font-weight-bold">El Traslado Incluye</h2> 
    <div class="row" style="margin-top: 2rem;">
        <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-left">        
            <li>
                <i class="fas fa-car"></i>
                <div class="contenedor-eleccion">
                    <h4>Transporte en unidades con aire acondicionado</h4>
                </div>
            </li>
            <li>
                <i class="fas fa-plane" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Prechequeo de vuelos</h4>
            </li>
            <li>
                <i class="fas fa-user-tie"></i>
                <div class="contenedor-eleccion">
                    <h4>Asistencia en el aeropuerto en la llegada y salida</h4>
                </div>
            </li>
            <li>
                <i class="fas fa-user-tie"></i>
                <div class="contenedor-eleccion">
                    <h4>Personal fijo en el aeropuerto y principales hoteles</h4>
                </div>
            </li>
        </ul>

        <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-right">
            <li>
                <i class="fas fa-h-square" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Asistencia en el  check-in y check-out del hotel</h4>
                </div>
            </li>        
            <li>
                <i class="fas fa-medkit" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Medicinas Básicas</h4>
                </div>
            </li>
            <li>
                <i class="far fa-file-alt" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Carta de bienvenida con logo de su empresa</h4>
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
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/traslado/traslado01.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/traslado/traslado02.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/traslado/traslado03.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/traslado/traslado04.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/traslado/traslado05.jpg') }}">
    </div>                         
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'TRASLADOS') !!} @endsection
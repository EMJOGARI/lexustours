@extends('layout-exc')

@section('text')<h2 class="display-4"></h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2 class="font-weight-bold">CITY TOURS (MEDIO DÍA)
</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-8 offset-md-2">        
        <p>Tour guiado por los lugares más interesantes y turísticos de la isla. Haciendo breves visitas o en algunos casos visitas panorámicas de los puntos. Esto permite obtener una idea general de lo que la isla puede ofrecer al visitante.</p>

        <p>* Zona históricas y comercial</p>
        <p>* Castillo san Carlos (pampatar)</p>
        <p>* Iglesia Virgen del valle</p>
        <p>* Áreas de Artesanía. </p>



    </div>   

@endsection

@section('con1')
<h2 class="h3 font-weight-bold">El Paseo a Caballo Incluye</h2> 
<div class="row" style="margin-top: 2rem;">
    <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-left">            
         <li>
            <i class="far fa-clock"></i>
            <div class="contenedor-eleccion">
                <h4>Duración de 4 horas</h4>
            </div>
        </li>
        <li>
            <i class="far fa-clock"></i>
            <div class="contenedor-eleccion">
                <h4>Prográmelo bién en la mañana o en la tarde de acuerdo a sus necesidades</h4>
            </div>
        </li>      
    </ul>    

    <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-right">
        <li>
            <i class="fas fa-car" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Transportación en unidades con a/a</h4>
            </div>
        </li>        
        <li>
            <i class="fas fa-user" aria-hidden="true"></i>
            <div class="contenedor-eleccion">
                <h4>Asistencia de guía en el idioma requerido</h4>
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
                <h4 style="margin-left: 1rem;">Ropa Ligera. Se requiere pantalón largo para visitar las iglesias.</h4>
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
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/city/city01.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/city/city02.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/city/city03.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/city/city04.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/city/city05.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/excursiones/city/city06.jpg') }}">
    </div>
         
@endsection 

@section('hidden'){!! Form::hidden('destino', 'CITY TOURS') !!} @endsection
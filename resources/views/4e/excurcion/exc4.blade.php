@extends('layout-exc')

@section('text')<h2 class="display-4"></h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2 class="font-weight-bold">TOURS DE COMPRAS</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-8 offset-md-2">        
        <p>Como bien es sabido, la Isla de Margarita ofrece por su condición de puerto libre una infinidad de atractivos productos a precios realmente económicos.</p>
        <p>Se hacen visitas a tiendas donde el pasajero pueda adquirir ropa, comestibles, vajillas, electrodomésticos, cubiertos, joyería, licores, artesanía y demás souvenirs.</p>
        
        <p>Salida y retorno prográmelo de acuerdo a  sus necesidades, bien en la mañana o en la tarde.</p>

        <p><strong>Notas:</strong>Horario de tiendas  =  1:00 pm  /  5:00 pm. Los días domingos están cerradas las tiendas en porlamar / en temporada baja, c.c. sambil  funciona todos los días  de 10 am  a 9 pm  // el domingo de 12 am a 8 pm en temporada baja</p>
 
    </div>   

@endsection

@section('con1')
    <h2 class="h3 font-weight-bold">El Tours de Compras Incluye</h2> 
    <div class="row" style="margin-top: 2rem;">
        <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-left">        
            <li>
                <i class="fas fa-car"></i>
                <div class="contenedor-eleccion">
                    <h4>Transporte en unidades con aire acondicionado</h4>
                </div>
            </li>
            <li>
                <i class="fas fa-user"></i>
                <div class="contenedor-eleccion">
                    <h4>Guia acompañante</h4>
                </div>
            </li>            
        </ul>

        <ul class="col-xs-6 col-lg-6 text-xs-center text-lg-right">
            <li>
                <i class="far fa-clock" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Duración de 4 horas</h4>
                </div>
            </li> 
            <li>
                <i class="fas fa-user" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4>Asesoria en el pago de las compras</h4>
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
                    <h4 style="margin-left: 1rem;">Ropa ligera y zapatos cómodos.</h4>
                </div>
            </li>
            <li>
                <i class="far fa-check-square" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4 style="margin-left: 1rem;">En caso de utilizar Tarjetas de Créditos, no olvidar pasaporte</h4>
                </div>
            </li>        
            <li>
                <i class="far fa-check-square" aria-hidden="true"></i>
                <div class="contenedor-eleccion">
                    <h4 style="margin-left: 1rem;">Niños: O a 4 años = Gratis / 5 a 12 años = 50 % descuento.</h4>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/excursiones/compra/compra01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/excursiones/compra/compra02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/excursiones/compra/compra03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/excursiones/compra/compra04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/excursiones/compra/compra05.jpg') }}">
                </div>                         
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'TOURS DE COMPRAS') !!} @endsection
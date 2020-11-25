@extends('layout-hotels')

@section('title')Portofino @endsection

@section('section')<section class="bienvenido Portofino" id="tama"> @endsection

@section('text')<h2 class="display-4">Portofino</h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Portofino</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p><strong>Ubicado en punto Norte de la Isla de Margarita en la extensa bahia de Playa El Humo</strong> cerca de la población de Manzanillo, a pocos metros del Boulevard de Playa El Agua.</p> 

        <p>El resort cuenta con un total de 501 habitaciones de variadas características, como: habitaciones de una cama queen size, de dos camas queen size, de dos camas individuales, de una cama queen size mas una individual, suites con un cuarto doble y una sala de living con dos sofa cama o camas individuales.</p>

        <p>El Hotel cuenta con: 4 Piscinas, Gimnasio, Volleyball y futbol en el area de playa y piscina, Actividades dirigidas para niños y adultos, Karaoke y Cine.</p>

		<p><strong>El Complejo Portofino es un HOTEL ALL INCLUSIVE, </strong>cuyo objetivo es brindarles a los turistas recreación integral, ofreciéndoles participar en numerosas actividades y disfrutar de servicios suplementarios en sus instalaciones.</p>  

        <p>Hotel situado en la zona de Playa El Agua a a 35 minutos del Aeropuerto y 35 minutos de los centros comerciales .</p>
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.3356621780144!2d-63.87835878576152!3d11.162764054997336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c3195cd5ea4fd4f%3A0xaadf33a1fdab599d!2sHotel+Portofino!5e0!3m2!1ses!2sve!4v1523300256073" width="800" height="600" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
    </div>

@endsection

@section('con1')
	                   
    <li><i class="fas fa-wifi"></i> Wifi.</li>
    <li><i class="far fa-life-ring"></i> Piscina.</li>
    <li><i class="fas fa-tv"></i> TV Satelital.</li>
    <li><i class="fas fa-utensils"></i> Restaurant.</li>
    <li><i class="fas fa-car"></i> Parking.</li>
    <li><i class="fas fa-plane"></i> Traslado al Aeropuerto.</li>
    <li><i class="fas fa-ship"></i> Traslado al Puerto.</li>
                   
@endsection 

@section('con2')    
    
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/portofino/p01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/portofino/p02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/portofino/p03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/portofino/p04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/portofino/p05.jpg') }}">
                </div>            
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'Portofino') !!} @endsection
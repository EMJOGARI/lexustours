@extends('layout-hotels')

@section('title')Dunes Hotel & Beach Resort @endsection

@section('section')<section class="bienvenido dunes" id="tama"> @endsection

@section('text')<h2 class="display-4">Sunsol Dunes Puerto Cruz</h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Sunsol Dunes Puerto Cruz</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Este hotel con plan todo Incluido, está ubicado en el extremo norte de la isla El hotel posee acceso directo a la playa más hermosa de la isla, con arenas blancas, llamada Playa Puerto Cruz con 2,5 kilómetros de extensión, a su vez tiene 579 habitaciones, 250 habitaciones Premium y 329 Villas, en 33 hectáreas, creadas bajo una arquitectura estilo mediterránea, rodeada de amplios jardines, marco perfecto para la planificación de eventos o bodas; estas áreas podrá disfrutarlas a pie o en bicicleta, creando la combinación perfecta para unas inolvidables vacaciones.</p>
        <p>Cuenta con 4 piscinas, 4 restaurantes, gimnasio, canchas deportivas, varias tiendas, 5 bares, salón de cine.</p>
        <p>Se encuentra a 30 minutos del aeropuerto y 40 minutos de los centros comerciales.</p>
 
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.86371024637!2d-63.9321942432941!3d11.123526757758952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c31949e1d1f1b15%3A0x74edaf029c8f3a35!2sHotel+Dunes!5e0!3m2!1ses-419!2sve!4v1523493429732" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/dunes/d01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/dunes/d02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/dunes/d03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/dunes/d04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/dunes/d05.jpg') }}">
                </div>                         
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'Dunes') !!} @endsection
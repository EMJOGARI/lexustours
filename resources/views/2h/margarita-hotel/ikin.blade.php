@extends('layout-hotels')

@section('title')Ikin @endsection

@section('section')<section class="bienvenido ikin" id="tama"> @endsection

@section('text')<h2 class="display-4">Ikin</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Ikin</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p><strong>El Ikin Hotel & Spa</strong> uno de los más exclusivos de la Isla  cuenta con numerosos espacios al aire libre como la piscina con hermosas vistas al mar, zonas de descanso con techos de paja. Confortables habitaciones con aire acondicionado, balcón privado y vistas a la playa. Es un lugar donde los huéspedes podrán relajarse en el spa o bajo las palmeras. Todas las mañanas podrá degustar un desayuno continental completo, acompañado de frutas tropicales, así como platos de fusión venezolanos y tailandeses.</p> 

        <p>Contamos con el restaurante La Bodega un íntimo Bistró del Mar, con cocina tradicional  y  además la autentica comida  venezolana y una atmosfera acogedora</p>
        <p>Se encuentra a 35 minutos del aeropuerto y 25 minutos de los centros comerciales.</p>
        
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.10817334768!2d-63.84367868474801!3d11.105315256072352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c3191480e0340b7%3A0x37cdd934b409131e!2sIkin+Margarita+Hotel+%26+Spa!5e0!3m2!1ses-419!2sve!4v1523720374507" width="600" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
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
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ikin/ikin01.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ikin/ikin02.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ikin/ikin03.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ikin/ikin04.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ikin/ikin05.jpg') }}">
    </div>
      
    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ikin/ikin06.jpg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ikin/ikin07.jpg') }}">
    </div>           
                
@endsection

@section('hidden'){!! Form::hidden('destino', 'Ikin') !!} @endsection


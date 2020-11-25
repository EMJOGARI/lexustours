@extends('layout-hotels')

@section('title')Kokobay @endsection

@section('section')<section class="bienvenido kokobay" id="tama"> @endsection

@section('text')<h2 class="display-4">Kokobay</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Kokobay</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Está ubicado en el extremo oriental de la Isla en la zona de Playa Caribe Su principal objetivo es de ofrecer una experiencia inolvidable en una de las playas más bellas.</p> 

        <p>Está ubicado en el extremo oriental de Playa Caribe, en Juan Griego. Con una espectacular salida a una playa de arenas blanquecinas, tres restaurantes y un bar con vista al mar que dará la bienvenida al principio de sus vacaciones.</p>

        <p><strong>Plan Todo Incluido:</strong> Desayunos, almuerzos, y cenas Tipo Buffet, bebidas nacionales alcohólicas y no alcohólicas ilimitadas, entretenimiento diurno y nocturno, snacks, sillas y toldos en la playa y piscina.</p> 

        <p><strong>Habitaciones:</strong> 220 habitaciones confortables in136 habitaciones estándar dobles . 52 habitaciones estándar. 20 habitaciones tienen vistas al mar.</p>  

        <p><strong>Instalaciones:</strong> Restaurante principal (desayuno, almuerzo, cena buffet) Playa Restaurante (bocadillos, aperitivos, la hora del té, restaurante caribeño en la noche) Restaurante a la carta (cena sólo, requiere reservación. Lobby bar y beach bar.</p>

        <p>Se encuentra a 25 minutos del aeropuerto y 45 minutos de los centros comerciales.</p>     
        
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2798.3422374167394!2d-63.95982683870624!3d11.108866621799498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c31ecb4b4a84e07%3A0x24b7447492858d28!2sHotel+Kokobay!5e0!3m2!1ses-419!2sve!4v1523737960708" width="600" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/Kokobay/kok01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/Kokobay/kok02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/Kokobay/kok03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/Kokobay/kok04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/Kokobay/kok05.jpg') }}">
                </div>            
                
@endsection

@section('hidden'){!! Form::hidden('destino', 'Kokobay') !!} @endsection


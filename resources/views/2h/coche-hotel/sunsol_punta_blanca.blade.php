@extends('layout-hotels')

@section('title')Sunsol Punta Blanca @endsection

@section('section')<section class="bienvenido sunsol_punta_blanca" id="tama"> @endsection

@section('text')<h2 class="display-4">Sunsol Punta Blanca</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Hotel Sunsol Punta Blanca</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p><strong>Este magnífico hotel se encuentra ubicado en la playa más paradisíaca de la Isla de Coche.</strong> A tan solo 20 minutos de navegación de la Isla de Margarita, SUNSOL Punta Blanca es el lugar ideal para disfrutar de unas vacaciones mágicas y memorables. Frente a una hermosa playa de finas arenas blancas y aguas cristalinas, emerge este hotel de categoría 4 estrellas superior, con un <strong>servicio Todo Incluido con bebidas Premium dentro de su paquete.</strong></p> 

        <p><strong>Una majestuosa y relajante piscina de usos múltiples</strong> y borde infinito que se confunde con el mar le espera con áreas para el descanso y actividades dirigidas: cascada, jacuzzi y zona para niños.</p>

        <p>Facilidades en la playa para el alquiler de servicios de velerismo, kite-surf, wind-surf, kayaks, wave-runners y bananas boat.
		Parque Infantil. Mini market. Servicio de toallas y tumbonas en la piscina y en la playa. Actividades diurnas para niños y adultos. WIFI en el área de Recepción. Transporte marítimo entre Playa El Yaque y la Isla de Coche.</p>

		<p><strong>El Hotel ha sido concebido también para el desarrollo de Celebraciones de Bodas y Renovación de Votos.</strong>
		Ofrece un mágico escenario natural donde se combina perfectamente el exclusivo paisajismo caribeño y los más hermosos atardeceres y, junto con la amplia experiencia de su staff en la concepción y ejecución del evento, convierten en realidad uno de los momentos más especiales de su vida.</p>

        <p>El hotel cuenta con 166 habitaciones distribuidas entre exóticos jardines el más elegante toque caribeño. Sus salas de baño sin techo, ofrecen un verdadero deleite.</p>  
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.5097555512918!2d-63.988527825329065!3d10.809817319292835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c321f39808164ed%3A0xe21add89b9f5efb7!2sSunsol+Punta+Blanca!5e0!3m2!1ses!2sve!4v1522251534378" width="600" height="450" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/coche/spb/1.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/coche/spb/2.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/coche/spb/3.jpeg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/coche/spb/4.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/coche/spb/5.jpg') }}">
                </div>            
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'Sunsol Punta Blanca') !!} @endsection
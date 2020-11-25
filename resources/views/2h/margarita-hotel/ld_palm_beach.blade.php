@extends('layout-hotels')

@section('title')LD Palm Beach @endsection

@section('section')<section class="bienvenido ldpb" id="tama"> @endsection

@section('text')<h2 class="display-4">LD Palm Beach</h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>LD Palm Beach</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Acogedor hotel, ideal para disfrutar de unas vacaciones inolvidables, donde encontrará un ambiente tranquilo, rodeado de confort y buen servicio, situado cerca del hermoso boulevard del Playa El Agua, la más concurrida de La Isla; además podrá disfrutar de una sugestiva área de piscina, perfecta para sumergirse en un completo relax, recomendado para personas de todas las edades y familias con niños.</p> 

        <p><strong>Habitaciones:</strong></p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> 120 Habitaciones Estándar: Ocupación sencilla, doble, triple.</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> 08 Bungalows: ocupación cuádruple y quíntuple.</p>
        
        <p><strong>Instalaciones y servicios:</strong></p>

        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio todo incluido</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Recepción 24 horas</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Restaurante buffet</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Bar en la playa</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Bar en la piscina</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Piscina para adultos y niños</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Jacuzzi para adultos</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Parque infantil</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Área para snack</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Área de masajes</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Sala de pool y mesa de futbolito</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de sombrillas, sillas de playa y toallas para la playa</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Transporte hacia la playa (A partir de las 9:00 hrs, saliendo desde el hotel cada 30 minutos)</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Actividades de recreación en la playa y piscina</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Show nocturno y animación</p>
        
        <p>Está ubicado a 300 metros del Boulevard de Playa El Agua, a 40 minutos de Porlamar y 35 minutos del Aeropuerto.</p>

    </div>
    <div class="col-xs-12 col-md-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.554046588642!2d-63.872974684747874!3d11.146553255299462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c319425cc1c5a33%3A0x3644fe2de062864c!2sHotel+Palm+Beach!5e0!3m2!1ses-419!2sve!4v1523496709632" width="600" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>    	
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeach/ldpb01.jpeg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeach/ldpb02.jpeg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeach/ldpb03.jpeg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeach/ldpb04.jpeg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeach/ldpb05.jpeg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeach/ldpb06.jpeg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeach/ldpb07.jpg') }}">
                </div>            
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'LD Palm Beach') !!} @endsection
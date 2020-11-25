@extends('layout-hotels')

@section('title')LD H2OTEL @endsection

@section('section')<section class="bienvenido ldh" id="tama"> @endsection

@section('text')<h2 class="display-4">LD H2OTEL</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>LD H2OTEL</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Uno de los hoteles Boutique más exclusivo de la isla, Ofrece un hospedaje de lujo donde el buen gusto, la comodidad, el estilo y el sosiego se conjugan en una hermosa locación natural muy cerca del Mar Caribe. Los imponentes paisajes marinos y su ambiente moderno sin duda cautivarán los sentidos de sus visitantes. Sus instalaciones combinan estilos modernos y de vanguardia con un ambiente tropical propio del Mar Caribe.</p> 

        <p>Estamos ubicados a 200mts de la playa donde tenemos nuestro exclusivo club de playa con servicio de bar y restaurante a la carta y transporte en carritos de golf.</p>

        <p><strong>Habitaciones:</strong></p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> 22 Superior King, 14 Superior Doble, 08 Deluxe Jardín, 02 Deluxe Solarium</p>
                
        <p><strong>Instalaciones y servicios:</strong></p>

        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Wifi gratis</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de Valet Parking</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de taxi desde el hotel</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Estacionamiento disponible gratis</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Habitaciones para personas con discapacidad</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Accesos y áreas para personas con discapacidad</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Recepción 24 horas</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Salón para Conferencias</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Espacios para Bodas, fiestas Sociales, Cumpleaños</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Terrazas y áreas comunes de esparcimiento</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Área de Gimnasio, Spa y sauna</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de Baby Room</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> No se permiten mascotas</p>
        <p>Está ubicado a 300 metros del Boulevard de Playa El Agua,  a 30 minutos de los centros comerciales y 35 minutos del Aeropuerto.Está ubicado a 300 metros del Boulevard de Playa El Agua, a 40 minutos de Porlamar y 35 minutos del Aeropuerto.</p>
        
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.5891957889144!2d-63.87080078535811!3d11.143941934797862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c319426b0105263%3A0x16f2ca2320039e06!2sH2otel!5e0!3m2!1ses-419!2sve!4v1523727314177" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
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
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldh2otel/ldh01.jpeg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldh2otel/ldh02.jpeg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldh2otel/ldh03.jpeg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldh2otel/ldh04.jpeg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldh2otel/ldh05.jpeg') }}">
    </div> 

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldh2otel/ldh06.jpeg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldh2otel/ldh07.jpeg') }}">
    </div>              
                
@endsection

@section('hidden'){!! Form::hidden('destino', 'LD H2OTEL') !!} @endsection


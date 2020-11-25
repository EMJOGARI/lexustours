@extends('layout-hotels')

@section('title')LD Palm Beach Plus @endsection

@section('section')<section class="bienvenido ldpbp" id="tama"> @endsection

@section('text') <h2 class="display-4">LD Palm Beach Plus</h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>LD Palm Beach Plus</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Hermoso hotel con una innovadora estructura y diseño que lo convierte en un referente de la Hotelería en Venezuela, ofrece una experiencia de alojamiento inigualable bajo un verdadero concepto todo incluido.</p> 

        <p>Todas las habitaciones estan completamente equipadas, cuidadosamente decoradas con lujo, brindando el máximo confort y agrado a su estadía, con hermosa vista a los jardínes y piscinas.</p>

        <p>Cuenta con 91 habitaciones dobles con camas Queen, capacidad para tres (3) personas y 8 habitaciones matrimoniales con camas King para dos (2) personas, todas equipadas con mini bar</p>

         <p><strong>Aspectos destacados del hotel:</strong></p>

        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Piscina para adultos y niños</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Zona de Jacuzzi</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Área infantil</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Salón para eventos sociales y convenciones</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Zona de ejercicios</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Zona spa</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Terraza con pista de trote</p>

        <p>Está ubicado a 300 metros del Boulevard de Playa El Agua,  a 30 minutos de los centros comerciales y 35 minutos del Aeropuerto.</p>

    </div>
    <div class="col-xs-12 col-md-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.549927199641!2d-63.872841684747804!3d11.146859255293753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c319425d03d2179%3A0xfa6929dbc6517f8f!2sHotel+LD+Plus+Palm+Beach!5e0!3m2!1ses-419!2sve!4v1523498414773" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>    	
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
            <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeachplus/ldpbp01.jpg') }}">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeachplus/ldpbp02.jpeg') }}">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeachplus/ldpbp03.jpeg') }}">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeachplus/ldpbp04.jpg') }}">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpalmbeachplus/ldpbp05.jpg') }}">
        </div>            
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'LD Palm Beach Plus') !!} @endsection

@extends('layout-hotels')

@section('title')LD Suites Punta Playa @endsection

@section('section')<section class="bienvenido ldspp" id="tama"> @endsection

@section('text')<h2 class="display-4">LD Suites Punta Playa</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>LD Suites Punta Playa</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>El hotel cuenta con suites de dos y tres habitaciones, capacidad desde 4 hasta 6 personas. Todas las Suites son tipo apartamento que incluyen cocina, comedor y terraza, completamente equipados para el máximo disfrute de nuestros huéspedes.</p> 

        <p>El complejo Hotelero presenta una infraestructura moderna, es un nuevo concepto para vacacionar, celebrar y realizar reuniones corporativas y eventos sociales, ofreciendo un servicio con personal altamente calificado.</p>

        <p><strong>Habitaciones:</strong></p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> 72 Suite Junior (2 Hab.), 48 Suite Premium (3 Hab.)</p>
        
        <p><strong>Aspectos destacados del hotel:</strong></p>

        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Wifi en el Lobby, piscina y salón de convencioneso</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio todo incluido, sólo desayuno y plan americano</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Habitaciones para personas con discapacidad</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Accesos y áreas para personas con discapacidad</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Recepción 24 hrs</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Planta Eléctrica y Desalinizadora</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de taxi 24 hrs</p>

        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de traslado Aeropuerto-Hotel-Aeropuerto</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> No se permiten mascotas</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de despertador</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de botones</p>

        <p>LD Suites Punta Playa está ubicado a tan solo 35 minutos del aeropuerto, en la zona norte de la isla, Pedro González a tan solo 30 minutos de las zonas comerciales visitadas por los turistas.</p>

    </div>
    <div class="col-xs-12 col-md-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.8508183016816!2d-63.92915907919948!3d11.124486337770325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c319362aecf06bf%3A0x9f40a29ee574eb96!2sClub+Punta+Playa+Hotel+%26+Resort!5e0!3m2!1ses-419!2sve!4v1523499751332" width="600" height="450" frameborder="0" style="border:0, width:100%;" allowfullscreen></iframe>    	
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpuntaplaya/ldspp01.jpeg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpuntaplaya/ldspp02.jpeg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpuntaplaya/ldspp03.jpeg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpuntaplaya/ldspp04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpuntaplaya/ldspp05.jpg') }}">
                </div>     

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/ldpuntaplaya/ldspp06.jpeg') }}">
                </div>       
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'LD Suites Punta Playa') !!} @endsection


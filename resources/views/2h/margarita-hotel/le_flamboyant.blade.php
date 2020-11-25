@extends('layout-hotels')

@section('title')Le Flamboyant @endsection

@section('section')<section class="bienvenido lf" id="tama"> @endsection

@section('text') <h2 class="display-4">Le Flamboyant</h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Le Flamboyant</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Es un encantador hotel mediterráneo que posee una atmosfera agradable. Su deleitable área de piscina proporciona un placentero ambiente relajante, sirve como el punto natural de reencuentro para los huéspedes del hotel. El hotel consta de varias edificaciones situadas al lado de una de las mejores playas en la isla, convirtiéndolo en una buena opción para aquellos que desean pasar sus vacaciones cerca de la playa.</p>

        <p>El hotel se encuentra ubicado al inicio del Boulevard de Playa El Agua. A 25 kilómetros de Porlamar.</p>

        <p>Con 120 habitaciones Standard, entre las cuales podemos encontrar unidades con 1 cama matrimonial / 1 cama matrimonial más 1 cama individual / 2 camas individuales y 2 camas matrimoniales, su capacidad máxima de 4 personas.</p>

         <p><strong>Aspectos destacados del hotel:</strong></p>

        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio TODO INCLUIDO</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Zona Wifi área de Lobby y Piscina gratis</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Habitaciones para personas con discapacidad</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Accesos y áreas para personas con discapacidad</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Recepción 24 hrs</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Áreas comunes</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de taxi desde el hotel</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Estacionamiento disponible gratis</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> No se permiten mascotas</p>

        <p>El hotel se encuentra ubicado al inicio del Boulevard de Playa El Agua. A 25 kilómetros de Porlamar.</p>
 
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.6324417692517!2d-63.861372684747856!3d11.140728255408797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c31969ec2a3f623%3A0xb880d91c041fb8a9!2sHotel+Le+Flamboyant!5e0!3m2!1ses-419!2sve!4v1523675221651" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
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
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/leflamboyant/lf01.jpeg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/leflamboyant/lf02.jpeg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/leflamboyant/lf03.jpeg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/leflamboyant/lf04.jpeg') }}">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/leflamboyant/lf05.jpeg') }}">
    </div>                         
     <div class="carousel-item">
        <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/leflamboyant/lf06.jpg') }}">
    </div>
    
@endsection 

@section('hidden'){!! Form::hidden('destino', 'Le Flamboyant') !!} @endsection
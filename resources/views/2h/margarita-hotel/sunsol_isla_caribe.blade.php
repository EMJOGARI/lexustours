@extends('layout-hotels')

@section('title')Sunsol Isla Caribe @endsection

@section('section')<section class="bienvenido sic" id="tama"> @endsection

@section('text')<h2 class="display-4">Sunsol Isla Caribe</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Sunsol Isla Caribe</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p><strong></strong>Le invita a disfrutar la maravillosa Isla de Margarita desde sus hermosas y amplias instalaciones. Con un sistema Todo Incluido, este Complejo Hotelero de categoría 4 estrellas, se encuentra ubicado en Playa El Tirano a solo 40 minutos del Aeropuerto Internacional "Santiago Mariño", 20 minutos de los mejores centros comerciales, restaurantes, discotecas, bares, casinos y a 5 minutos de Playa El Agua y Playa Parguito.</p> 

        <p><strong>Habitaciones</strong></p>

        <p>313 Habitaciones Premium: Equipadas con una cama king size o dos camas queen o full size. TV por cable. Baño con ducha. Mini nevera. Aire Acondicionado. Deshumidificador. Secador de Cabello. Caja de Seguridad. Amplio balcón con vista al mar, a la montaña o a la piscina, o terraza con salida directa a la piscina.</p>
        <p>8 habitaciones Premium Superior con mini piscina, 3 suites presidenciales.</p>
        <p>102 Habitaciones Estandar, 8 cabañas con terraza, y 9 habitaciones familiares con vista a la piscina.<p>

        <p><strong>El hotel ofrece los siguientes servicios:</strong></p>

        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de Wifi gratuito en áreas comunes</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> 2 Restaurantes buffet</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> 1 Restaurante de snacks</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> 1 Restaurante a la carta (costo adicional)</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> 4 Bares</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> 2 Bares con bebidas Premium (costo adicional)</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Club de Playa (servicio personalizado)</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Parque Infantil y Sala de Juegos</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Sala de Videojuegos y Cyber (costo adicional)</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Teatro con shows nocturnos para adultos y niños</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Cenas temáticas</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Discoteca</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Mini-market</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Salones para Eventos y Convenciones</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Cancha de Voleibol</p>
        <p style="margin-left: 1.5rem"><i class="far fa-check-square" aria-hidden="true"></i> Servicio de Masajes (costo adicional)</p>

        <p>Se encuentra a 35 minutos del aeropuerto y 20 minutos de los centros comerciales</p>

          
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.011984401076!2d-63.847412885762004!3d11.112484455940612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c31914b9b9618c1%3A0x3da244224dc5d30f!2sSunsol+Isla+Caribe!5e0!3m2!1ses!2sve!4v1523302251331" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/sunsol.jpg') }}">
                </div>
                 <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/sunsolislacaribe/sic01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/sunsolislacaribe/sic02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/sunsolislacaribe/sic03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/sunsolislacaribe/sic04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/sunsolislacaribe/sic05.jpg') }}">
                </div> 
                 <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/sunsolislacaribe/sic06.jpg') }}">
                </div>           
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'Sunsol Isla Caribe') !!} @endsection

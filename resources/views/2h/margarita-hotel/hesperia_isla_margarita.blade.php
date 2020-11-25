@extends('layout-hotels')

@section('title')Hesperia Isla Margarita @endsection

@section('section')<section class="bienvenido him" id="tama"> @endsection

@section('text')<h2 class="display-4">Hesperia Isla Margarita</h2"> @endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Hesperia Isla Margarita</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Hotel con el plan todo incluido, En la zona norte de  isla está situado el Hesperia Isla Margarita: Golf, Spa And Beach Resort. En primera línea de mar, con una hermosa playa casi privada con arena blanca, es uno de los más modernos hoteles de la isla, rodeado de magníficos jardines, y el único hotel cuatro estrellas con campo de golf de 18 hoyos en la isla de Margarita.</p> 

        <p>El hotel dispone de 5 restaurantes, 2 piscinas para adultos y niños, gigante zona de spa y gimnasio, 3 bares, salones para eventos y convenciones, zona de tienda, mini club para niños.</p>

        <p>El hotel cuenta con 312 habitaciones, entre ellas, amplias suites que ofrecen un lujo superior. Con una Suite Master de 108 metros cuadrados, ofrece a los huéspedes un área de estar elegantemente decorada y dos dormitorios independientes. Disfruta de un minibar, botellas de agua mineral de cortesía y TV vía satélite. Las comodidades también incluyen un lujoso baño, caja fuerte y mucho más.</p>

        <p>Descubre la elegancia tropical con la habitación Standard de 50 metros cuadrados, que ofrece una cama King o 2 camas individuales, 2 sofás individuales y un escritorio. Disfruta la brisa de la isla mientras ves la TV vía satélite. La lujosa Junior Suite de 108 metros cuadrados cuenta con capacidad para familias y pequeños grupos. Dos dormitorios y un área de estar te invitan a relajarte en un entorno tropical que ofrece convenientes comodidades.</p>

		<p>Las Suites Presidencial y Royal, lo mejor del lujo, ofrecen dormitorio y área de estar independientes, con elegante decoración. Elige entre una cama King en la Suite Presidencial o dos dormitorios con una cama King y dos camas individuales en la Suite Royal, y disfruta de comodidades como minibar, caja fuerte y TV vía satélite. Disfruta de las vistas al mar o al campo de golf desde tu refugio de 50 metros cuadrados.</p>

        <p>Se encuentra a 30 minutos del aeropuerto y 40 minutos de los centros comerciales.</p>
 
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5536.366569646734!2d-63.918559564094295!3d11.128093631783562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c31948693960535%3A0x78e7a6284fadaa43!2sHotel+Hesperia+Isla+Margarita!5e0!3m2!1ses-419!2sve!4v1523324246821" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaislamargarita/him01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaislamargarita/him02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaislamargarita/him03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaislamargarita/him04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaislamargarita/him05.jpg') }}">
                </div>                         
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'Hesperia Isla Margarita') !!} @endsection
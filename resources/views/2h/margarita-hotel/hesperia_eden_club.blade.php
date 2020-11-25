@extends('layout-hotels')

@section('title')Hesperia Edén Club @endsection

@section('section')<section class="bienvenido hec" id="tama"> @endsection

@section('text')<h2 class="display-4">Hesperia Edén Club</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Hesperia Edén Club</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Es un novedoso concepto de todo incluido <strong>sólo para adultos o para familias con hijos mayores de edad.</strong> Encanto, romance, exclusividad, y relax son los principales atributos de este maravilloso lugar.</p> 

        <p>El hotel cuenta con tres restaurantes, una gigantesca zona de piscina con camas balinesas y masajes al aire libre, uno de los mejores spa y gimnasio de la Isla, excelente zona de playa, fiestas en la piscina, en el lobby bar se proyectan videos musicales y tiene una zona de relax. Alguno de nuestros servicios tienen un costo extra.</p>

        <p><strong>Restaurantes Asían</strong> Anexo a la zona lounge del Edén, encontrarás un lugar fresco y ajardinado donde podrás degustar sushi y platos orientales preparados al momento, todo ello en un ambiente relajado y casual, pensado para disfrutar de un instante diferente.</p>

        <p><strong>Restaurante Shore Grill</strong> Un lugar con encanto al aire libre, dónde la iluminación tenue y la brisa marina envueltas de tranquilos tonos musicales, harán de tus cenas una experiencia única. Especializado en cocina a la parrilla, podrás degustar carnes, pescados y mariscos frescos de gran calidad</p>

		<p><strong>Tenemos dos categorías de habitaciones: Habitaciones Premium Plus,</strong> Decoradas en tonos tierra, elegantes muebles de madera y vistas al jardín o a la piscina. Además, podrás elegir entre una cama tamaño king o dos camas dobles, las habitaciones están equipadas de forma moderna y con las comodidades necesarias para disfrutar de una estancia agradable y la <strong>Habitación Junior Suite,</strong> Ofrecen a los huéspedes un espacio elegantemente decorado, donde podrá elegir entre una suite con un ambiente acogedor o una suite con dos áreas separadas además de una cama tamaño king de lujo. Las habitaciones están equipadas con una amplia gama de artículos y detalles para el total confort.</p>

        <p>Se encuentra a 40 minutos del aeropuerto y 30 minutos de los centros comerciales.</p>
 
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.5863603220514!2d-63.86323469632072!3d11.144152611004566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c319427616ebb17%3A0xadc2812a1f30bf3e!2sHotel+Hesperia+Ed%C3%A9n+Club!5e0!3m2!1ses!2sve!4v1523299072549" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaclubeden/hec02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaclubeden/hec03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaclubeden/hec04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaclubeden/hec05.jpg') }}">
                </div>                         
                 <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaclubeden/hec06.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaclubeden/hec07.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaclubeden/hec08.jpg') }}">
                </div>
@endsection 

@section('hidden'){!! Form::hidden('destino', 'Hesperia Eden Club') !!} @endsection


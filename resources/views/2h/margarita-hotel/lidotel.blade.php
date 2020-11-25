@extends('layout-hotels')

@section('title')Lidotel Hotel Boutique @endsection

@section('section')<section class="bienvenido lidotel" id="tama"> @endsection

@section('text')<h2 class="display-4">Lidotel Hotel Boutique</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Lidotel Hotel Boutique</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Margarita ha sido catalogado por usuarios de la prestigiosa página turística Trip Advisor como “el mejor hotel de la Isla de Margarita”. Fue, luego del de San Cristóbal y Valencia, el tercer Lidotel en ser inaugurado en Venezuela. Cuenta con acceso directo al Centro Sambil Margarita, por lo cual, además de las múltiples amenidades que ofrece, cuenta con una amplia oferta a nivel de compras, servicios, gastronomía y entretenimiento. Todo, en un mismo lugar, sin necesidad de desplazarse.</p> 

        <p>Destaca el lujo en sus instalaciones: un fantástico Lobby-Restaurante, piscina en el último piso con vista panorámica de la isla, salones de eventos, gimnasio y sus 134 habitaciones, Suite Presidencial y Suite Imperial decoradas bajo un concepto contemporáneo, que incluye la incorporación de pinturas realizadas por artistas locales, bajo la temática de la música.</p>

        <p>Todas cuentan con mini bar, baño equipado, caja fuerte e internet.</p>

        <p>Lidotel Hotel Boutique Margarita está ubicado a 35 minutos del aeropuerto y 30  de los centros comerciales</p>        
        
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15666.228932347953!2d-63.823492678912956!3d10.99675480810385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dd76071a7ee2183%3A0x703e6a0218a4b13c!2sLidotel+Hotel+Boutique+Margarita!5e0!3m2!1ses-419!2sve!4v1523728412446" width="600" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotel/l01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotel/l02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotel/l03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotel/l04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotel/l05.jpg') }}">
                </div>            
                
@endsection

@section('hidden'){!! Form::hidden('destino', 'Lidotel Hotel Boutique') !!} @endsection


@extends('layout-hotels')

@section('title')Tibisay @endsection

@section('section')<section class="bienvenido tibisay" id="tama"> @endsection

@section('text')<h2 class="display-4">Tibisay</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Tibisay</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>se encuentra ubicado sobre la avenida Aldonza Manrique a pocos metros antes de la entrada a la pintoresca ciudad de Pampatar, capital gastronómica de la Isla de Margarita, con una inigualable vista al Mar Caribe y vecino de los más importantes y exclusivos centros comerciales y discotecas. Su ubicación le permite acceder fácilmente a todas las principales avenidas y rutas turísticas.</p> 

        <p>Un conjunto de detalles que invitan al descanso, La combinación de texturas y materiales modernos se destacan en cada una de las 134 habitaciones y áreas decoradas en estilo minimalista</p>

        <p>Un ambiente moderno donde los detalles fueron pensados para satisfacer en todo momento cada una de sus necesidades.</p>   

        <p>Se encuentra ubicado en la Av. Aldonza Manrique c/c Camarón, Urb. Playa el Angel, frente a Playa Varadero, Pampatar a 30 minutos del aeropuerto y 5 minutos de los centros comerciales </p>     
        
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6604688213447!2d-63.80710648483432!3d10.988980192177532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318fa7df3644c3%3A0x85b01b7a86a556ea!2sHotel+Tibisay+Boutique!5e0!3m2!1ses-419!2sve!4v1523737360482" width="600" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/tibisay/tib01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/tibisay/tib02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/tibisay/tib03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/tibisay/tib04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/tibisay/tib05.jpg') }}">
                </div>            
                
@endsection

@section('hidden'){!! Form::hidden('destino', 'Tibisay') !!} @endsection


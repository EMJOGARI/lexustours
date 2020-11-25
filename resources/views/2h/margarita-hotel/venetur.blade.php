@extends('layout-hotels')

@section('title')Venetur Margarita @endsection

@section('section')<section class="bienvenido venetur" id="tama"> @endsection

@section('text')<h2 class="display-4">Venetur Margarita</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Venetur Margarita</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Con una impresionante vista al Mar Caribe se encuentra ubicado el Hotel Venetur Margarita.</p>
        <p>Posee unas confortables y acogedoras habitaciones para el goce y disfrute de sus huéspedes, además cuenta con espaciosas salas de reuniones, restaurantes, áreas comunes.</p>
        <p>Las lujosas habitaciones y suites cuentan con pantalla plana, minibar, caja fuerte y balcón. Las suites incluyen además sala de estar. Hay disponible servicio de habitaciones las 24 horas.</p>
        <p>El desayuno está incluido. Hay 3 restaurantes elegantes, un salón en el vestíbulo y una coctelería. Otros servicios del hotel incluyen 2 piscinas exteriores, pistas de tenis y un gimnasio, además de una galería comercial, un parque infantil y salas de conferencias.</p>
        <p>Se encuentra ubicado el Hotel Venetur Margarita, el cual está a sólo 25 minutos del Aeropuerto y a 3 y 10 minutos de los centros comerciales.</p>
        
    </div>
    <div class="col-xs-12 col-md-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.774764829556!2d-63.820445984834485!3d10.980366292183303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318efd11f32815%3A0x9cf42bcd4bfff4de!2sVenetur!5e0!3m2!1ses-419!2sve!4v1525492971141" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    	
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
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/venetur/ven.jpg') }}">
                </div>

                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/venetur/ven01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/venetur/ven02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/venetur/ven03.jpg') }}">
                </div> 
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/venetur/ven04.jpg') }}">
                </div>        
                
@endsection

@section('hidden'){!! Form::hidden('destino', 'Venetur Margarita') !!} @endsection


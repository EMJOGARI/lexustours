@extends('layout-hotels')

@section('title')Wyndham Concorde Resort @endsection

@section('section')<section class="bienvenido wyndham" id="tama"> @endsection

@section('text')<h2 class="display-4">Wyndham Concorde Resort</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Wyndham Concorde Resort</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Con una ubicación envidiable en Isla Margarita en el Mar Caribe y con una extensa variedad de servicios, el Wyndham Isla Margarita Concorde de servicio completo y recientemente renovado es un destino ejemplar, ya sea que visite la costa noreste de Venezuela por cuestiones de negocios o placer.</p>
        <p>Ubicado a solo unos pasos de Playa Concorde y Laguna Blanca, este hotel para no fumadores en Isla Margarita ofrece tiendas donde podrá hacer compras libres de impuestos, muchas actividades recreativas, restaurantes y servicio en la habitación las 24 horas, casi 17.000 pies cuadrados de espacio para realizar reuniones y eventos, y 205 habitaciones y suites elegantes con vista al mar.</p>
        <p>Piscina gigante de usos múltiples que destaca por su singular diseño, permite a los usuarios relajarse  tanto dentro como fuera de ella por la disposición de áreas como un lounge externo al borde de la piscina, wet bar y jacuzzis.</p>
        <p>Sin duda los huéspedes lo consideran su hotel por excelencia en Isla Margarita.</p>
        <p>Se encuentra ubicado, a sólo 25 minutos del Aeropuerto 10 minutos de los centros comerciales .</p>
        
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3293.9154480531047!2d-63.82755421301776!3d10.952214535554795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318ed3dc420b1d%3A0xe19f069ab3fa076!2sWyndham+Isla+Margarita+Concorde!5e0!3m2!1ses-419!2sve!4v1523724952644" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/wyndham/w01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/wyndham/w02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/wyndham/w03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/wyndham/w04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/wyndham/w05.jpg') }}">
                </div> 
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/wyndham/w06.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/wyndham/w07.jpg') }}">
                </div>           
                
@endsection

@section('hidden'){!! Form::hidden('destino', 'Wyndham Concorde Resort') !!} @endsection


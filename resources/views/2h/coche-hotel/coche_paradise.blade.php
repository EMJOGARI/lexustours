@extends('layout-hotels')

@section('title')Coche Paradise @endsection

@section('section')<section class="bienvenido cp" id="tama"> @endsection

@section('text')<h2 class="display-4">Coche Paradise</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Coche Paradise</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>cuenta con 114 habitaciones (Cabañas) frente al mar en el sector Playa La Punta, a solo 20 minutos en lancha desde la Isla de Margarita. El Hotel ofrece a sus huéspedes servicio “Todo Incluido”</p> 

        <p><strong>Las habitaciones en el Hotel Coche Paradise </strong> disponen de TV, cable / satélite canales y caja fuerte. Están equipadas con microondas, mininevera y mini-bar y servicio de habitaciones está disponible.</p>

        <p><strong>El hotel ofrece a sus clientes </strong> las mejores facilidades de playa para el disfrute de toda la familia, cuenta con sala de conferencia, restaurant, piscina, acceso directo a la playa, actividades acuáticas, "Windsurf, Kitesurf & Kayak" y todo lo necesario para sus vacaciones.</p>  
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.042499308874!2d-63.98964268483571!3d10.808056992300063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c321f39f1266eff%3A0x4a9037c51cb9fec5!2sHotel+Coche+Paradise!5e0!3m2!1ses-419!2sve!4v1523738211847" width="600" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/coche/cocheparadise/cp01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/coche/cocheparadise/cp02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/coche/cocheparadise/cp03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/coche/cocheparadise/cp04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/coche/cocheparadise/cp05.jpg') }}">
                </div>            
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'Coche Paradise') !!} @endsection
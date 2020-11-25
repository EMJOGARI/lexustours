@extends('layout-hotels')

@section('title')Hesperia Playa el Agua@endsection

@section('section')<section class="bienvenido hpa" id="tama"> @endsection

@section('text')<h2 class="display-4">Hesperia Playa el Agua</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Hesperia Playa el Agua</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        

        <p>Ubicado en el corazón de playa el agua, que con sus 4000 metros de longitud es la más famosa de la isla de Margarita. El Hesperia Playa El Agua es un complejo que ofrece todo lo necesario para unas vacaciones inolvidables. Diversión, comodidad, variedad gastronómica y un inigualable servicio hacen de este hotel el lugar indicado para disfrutar de unos días en familia.</p> 

        <p>Este fantástico resort todo incluido, cuenta con diversas piscinas, zonas ajardinadas y acceso a la playa. Dispone de tres restaurantes con variada gastronomía. Por tanto, es el lugar ideal para disfrutar de unas buenas vacaciones en familia. Hesperia Playa el Agua cuenta con amplias y cómodas habitaciones, como las Premium o las Confort Villas, con todo lo necesario para el descanso, El servicio y la atención al cliente se adaptan a las necesidades de todos sus visitantes para que sus vacaciones se conviertan en una experiencia inolvidable.</p> 

        <p>Se encuentra a 40 minutos del aeropuerto y 30 minutos de los centros comerciales.</p>       
 
    </div>
    <div class="col-xs-12 col-md-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.590439096595!2d-63.86886228474787!3d11.14384955535022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c31942133725211%3A0x3f2c026d8cc30c5!2sHotel+Hesperia+Playa+el+Agua!5e0!3m2!1ses-419!2sve!4v1523494888703" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>    	
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaplayaelagua/hpa01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaplayaelagua/hpa02.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaplayaelagua/hpa03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaplayaelagua/hpa04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/hesperiaplayaelagua/hpa05.jpg') }}">
                </div>                         
                
@endsection 

@section('hidden'){!! Form::hidden('destino', 'Hesperia Playa El Agua') !!} @endsection
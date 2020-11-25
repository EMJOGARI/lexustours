@extends('layout-hotels')

@section('title')Agua Dorada Beach @endsection

@section('section')<section class="bienvenido lad" id="tama"> @endsection

@section('text')<h2 class="display-4">Agua Dorada Beach</h2">@endsection

@section('content')

    <div class="col-xs-12 col-md-12">
        <h2>Agua Dorada Beach</h2>
        <hr>        
    </div>         
    <div class="col-xs-12 col-md-7">        
        <p>Presentamos para Usted nuestra categoría Beach de estilo mediterráneo, Agua Dorada Beach Hotel By Lidotel en el corazón de Playa el Agua en la Isla de Margarita con una privilegiada ubicación frente al mar, resulta el alojamiento ideal para viajeros que desean disfrutar de unas vacaciones relajantes en la isla, resaltando toda la belleza natural de su entorno.</p> 

        <p><strong>Nuestro hotel Incluye:</strong></p>
        <p>Desayuno Buffet en el Restaurant Le Nouveau, acceso inalámbrico a Internet (WIFI), Business Center, uso de nuestra exclusiva piscina, acceso a nuestro gimnasio, sillas y toldos en la playa, kit de vanidades y niños de 0 a 2 años sin recargos.</p>
        <p><strong>Habitaciones:</strong></p>
        <p>Cálida y confortable habitación decorada con un estilo vanguardista, 100% libre de humo, Cama Lidotel Royal King, con reloj despertador, TV 32” HD Plasma con cable, 2 baños con ducha, cafetera eléctrica, nevera ejecutiva,  caja electrónica de seguridad y secador de cabello, armario adicional amplio y área separada con 2 sofá-cama individuales.</p>
        <p><strong>Salones:</strong></p>
        <p>Agua Dorada Beach Hotel By Lidotel cuenta con un cómodo y elegante salón para cualquier tipo de eventos: Bodas, Lanzamientos, Showrooms, Conferencias, Reuniones de Trabajo y Congresos. Bien  equipado con equipos de alta tecnología audiovisual, excelente iluminación y proporcionamos cualquier otro material de trabajo adicional que Usted requiera. Además nuestro Departamento de Alimentas y Bebidas ofrece una amplia variedad de menús para atender desayunos, almuerzos o cenasAgua Dorada Beach Hotel By Lidotel cuenta con un cómodo y elegante salón para cualquier tipo de eventos: Bodas, Lanzamientos, Showrooms, Conferencias, Reuniones de Trabajo y Congresos. Bien  equipado con equipos de alta tecnología audiovisual, excelente iluminación y proporcionamos cualquier otro material de trabajo adicional que Usted requiera. Además nuestro Departamento de Alimentas y Bebidas ofrece una amplia variedad de menús para atender desayunos, almuerzos o cenas.</p>

        <p>Se encuentra a 40 minutos del aeropuerto y 30 minutos de los centros comerciales.</p>
        
    </div>
    <div class="col-xs-12 col-md-5">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.5019572205033!2d-63.87173968483323!3d11.15042199206838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c319428c5302ead%3A0xed7c13abe6e361!2sAgua+Dorada+Beach+Hotel+By+Lidotel!5e0!3m2!1ses-419!2sve!4v1523735692154" width="600" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
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
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotelaguadorada/lad02.jpg') }}">
                </div>
                 <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotelaguadorada/lad01.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotelaguadorada/lad03.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotelaguadorada/lad04.jpg') }}">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotelaguadorada/lad05.jpg') }}">
                </div> 

                 <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotelaguadorada/lad06.jpg') }}">
                </div>
                 <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/assets/img/hotels/margarita/lidotelaguadorada/lad07.jpg') }}">
                </div>              
                
@endsection

@section('hidden'){!! Form::hidden('destino', 'Lidotel Agua Dorada') !!} @endsection


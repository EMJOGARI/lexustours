@extends('layout-destino')

@section('title')Destino @endsection

@section('section')<section class="bienvenido hot"> @endsection

@section('text')
    <h3 class="display-4">Isla de Margarita</h3">
    <h4>La Perla del Caribe</h4>    
@endsection

@section('content')	
    <div class="row">               
        <div class="col-xs-12 col-md-12">        
            <p><strong>Isla de Margarita, un destino consentido por los amantes del mar caribe;</strong> es que esta hermosa isla tiene la particularidad de enamorar a los que la visitan. Lo interesante de este destino es que no solo encontraras sol y playa sino que puedes realizar un sin fin de actividades que garantizaran una estadía llena de mágicos y memorables momentos. Y es que es un destino que te ofrece mucho mas que excelentes playas… en esta paradisiaca isla, lo tienes todo.</p> 

            <p><strong>Paseos en Kayak:</strong> imagínese paseando con toda su familia o grupo de amigos o en pareja por la laguna la restinga, la experiencia de recorrerla entre manglares mientras observas variedad de flora y fauna.</p>

            <p>Facilidades en la playa para el alquiler de servicios de velerismo, kite-surf, wind-surf, kayaks, wave-runners y bananas boat.
            Parque Infantil. Mini market. Servicio de toallas y tumbonas en la piscina y en la playa. Actividades diurnas para niños y adultos. WIFI en el área de Recepción. Transporte marítimo entre Playa El Yaque y la Isla de Coche.</p>

            <p><strong>Y si de diversión se trata hay un sin fin de actividades que puedes realizar.</strong>
            recorrer las mejores playas y cerrar con una de tantas vistas que te dejaran cautivado mientras aprendes y degustas en una cata de Ron todo esto a bordo de La Chiva playera, también puedes nadar y compartir cara cara con adorables delfines, sumergirte por toboganes, ir de Shopping, recorrer hermosos paisajes en caballo…</p>  

            <p>Ahora se preguntaran… ¿Que hacemos en las noches? Bueno les comento que nuestra propuesta gastronómica es todo una experiencia y les faltaran días para probarlos todos. Esta isla cada día nos ofrece variedad de alternativas, desde disfrutar deliciosas pizzas a orilla de playa, pasando por comidas de autor, hasta disfrutar de excelente rumba y gastronomía a la vez… y si vienen un fin de semana no pueden dejar de pasar los sábados por el mercadito de la asunción, una feria de emprendedores artesanos y gastronomía variada, abierta al publico en general, con un ambiente europeo<strong>en nuestro hermoso casco antiguo.</strong></p> 
            
        </div>
    </div>
@endsection

@section('mapa')	
       <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d210793.28457599075!2d-64.0943640413874!3d10.976491231067904!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1523153403991" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
@endsection 

@section('destino')VISITA LA PERLA DEL CARIBE @endsection


@section('hidden'){!! Form::hidden('destino', 'Isla de Margarita') !!} @endsection
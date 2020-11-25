@extends('layout-destino')

@section('title')Canaima @endsection

@section('section')<section class="bienvenido hot"> @endsection

@section('text')
    <h3 class="display-4">Canaima</h3">
    <h4>Cultura ancestral del pueblo Pemón.</h4>    
@endsection

@section('content')	
    <div class="row">               
        <div class="col-xs-12 col-md-12">        
            <p><strong>Ubicado en el estado Bolívar, Venezuela. </strong>Fue declarado Patrimonio de la Humanidad por la Unesco en el año 1994. Entre sus atractivos podrás conocer las primeras formaciones del planeta,<strong>la caída de agua más larga del mundo, el Kerepacupai Vená, </strong>mejor conocido como <strong>Salto Angel </strong>con casi 1000 metros de altura y <strong>La Gran Sabana. </strong></p> 

            <p><strong>El Parque Nacional Canaima, </strong>es un centro de atracción turística del mundo, debido a sus paisajes naturales, epicentro de una rica diversidad de flora y fauna y origen de <strong>la cultura ancestral del pueblo pemón.</strong></p>

            <p>Una de las cosas que más resalta en este parque, son sus ríos y los saltos de agua, como el Aponguao y el Kamarata; dos de los saltos de agua más altos del mundo, el salto Ángel y el Kukenán y gran cantidad de cataratas de menor altura.</p>

            <p><strong>La exploración </strong>de esta región se realiza principalmente por las sabanas y arroyos navegables mediante curiaras (embarcación indígena). La mayoría de los viajes en el parque son por aire en avionetas y helicópteros; para acceder a las regiones de sabanas es recomendable ir en un vehículo rústico con tracción en las 4 ruedas especialmente preparado para este tipo de expediciones. Las excursiones a la zona oriental del parque son memorables y relativamente fáciles de realizar, ya que hay una carretera asfaltada que atraviesa el parque desde Puerto Ordaz hasta <strong>Santa Elena de Uairen.</strong></p>
                        
        </div>
    </div>
@endsection

@section('mapa')	
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1016748.3534319776!2d-61.92351770796114!3d5.466445978564711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1523155828534" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
@endsection 

@section('destino')VISITA CANAIMA @endsection


@section('hidden'){!! Form::hidden('destino', 'Canaima') !!} @endsection
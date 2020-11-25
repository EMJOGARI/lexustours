@extends('layout-destino')

@section('title')Los Roques @endsection

@section('section')<section class="bienvenido hot"> @endsection

@section('text')
    <h3 class="display-4">Los Roques</h3">
    <h4>Playas son consideradas entre las mejores del mundo</h4>    
@endsection

@section('content')	
    <div class="row">               
        <div class="col-xs-12 col-md-12">        
            <p><strong>El Archipiélago de Los Roques, se encuentra ubicado al Norte de la costa central de Venezuela, </strong>fué decretado <strong>Parque Nacional en el año 1972, </strong>esta conformado por unas 50 islas y unos 292 cayos y bancos, para orgullo venezolano, sus playas son consideradas entre las mejores del mundo, debido a sus aguas calmas, arenas blancas y aguas cristalinas ideales para disfrutar, en familia, pareja o amigos;<strong>el Parque Nacional </strong>cuenta con uno de los arrecifes de coral mas diverso y mejor conservado del <strong>Mar Caribe. </strong>El acceso mas cómodo a este archipiélago es por Caracas , de donde salen vuelos diarios en avioneta, aunque también podría llegar por embarcación, a la única isla habitada en todo el <strong>parque Nacional, El Gran Roque. </strong>y es que desde la aproximación en las alturas tus ojos serán cautivados</p> 

            <p><strong>El Gran Roque</strong> de 1,7 km2, es un pintoresco pueblito de calles de arenas, muy limpio, y con paisajes únicos, en este se encuentran variedad de opciones de hospedaje, en su mayoría casas grandes adaptadas como posada con modalidad full pensión</p>

            <p><strong>* Cayo Francisqui</strong></p>
            <p><strong>* Cayo Madrisqui</strong></p>
            <p><strong>* Cayo Rasquí</strong></p>
            <p><strong>* Cayo Pirat</strong></p>
            <p><strong>* Cayo Nordisqui</strong></p>
            <p><strong>* Cayos Noronquises</strong></p> 
            
        </div>
    </div>
@endsection

@section('mapa')	
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d176714.8064040113!2d-66.74880255404757!3d11.843502227641185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1523156025661" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
@endsection 

@section('destino')VISITA LOS ROQUES @endsection


@section('hidden'){!! Form::hidden('destino', 'Los Roques') !!} @endsection
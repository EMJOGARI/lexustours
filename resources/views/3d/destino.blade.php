@extends('layout')

@section('title')Destino @endsection

@section('section')<section class="bienvenido hot">@endsection

@section('m2') class= "active"@endsection

@section('text')
    <h3 class="display-4">LOS MEJORES DESTINOS PARA TUS VACACIONES </h3">    
@endsection

@section('content')
<div class="container">
    <div class="row"> 
        
        <div class="col-xs-12 col-sm-6 wow zoomInUp  p-y-1 " data-wow-duration="2s" data-wow-delay="0.2s" ">
            <a href="{{ url('3d/canaima-destino') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/destinos/canaima.jpg') }}" alt="Sunsol Punta Blanca" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Canaima</h4>  
                            <h6 class="card-text">Imponente y Majestuoso</h6> 
                        </div>                      
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-md-6 wow zoomInUp p-y-1" data-wow-duration="2s" data-wow-delay="0.2s">
            <a href="{{ url('3d/margarita-destino') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/destinos/pampatar.jpg') }}" alt="Sunsol Punta Blanca" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Isla Margarita</h4> 
                            <h6 class="card-text">La Perla del Caribe</h6>
                        </div> 
                    </div>
                </div>                            
            </a>                
        </div>  
          
        <div class="col-xs-12 col-md-6 wow zoomInUp p-y-1" data-wow-duration="2s" data-wow-delay="0.2s">
            <a href="{{ url('3d/los-roques-destino') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/destinos/roque.jpg') }}" alt="Sunsol Punta Blanca" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Los Roques</h4>
                            <h6 class="card-text">Un Paraíso tropical Mágico</h6>
                        </div> 
                    </div>
                </div>                            
            </a>                
        </div>  
    </div>
</div>
@endsection

@section('con1')
	
        
@endsection 


@section('con2')

@endsection 


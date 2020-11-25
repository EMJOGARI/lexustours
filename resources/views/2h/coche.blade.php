@extends('layout')

@section('title')Isla de Coche @endsection

@section('section')<section class="bienvenido hot"> @endsection

@section('text')
    <h3 class="display-4">ISLA DE COCHE</h3">
    <h5>ENCUENTRA EL MEJOR HOTEL DE ACUERDO A TUS NECESIDADES</h5>    
@endsection

@section('content')
<div class="container">
    <div class="row"> 
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow zoomInLeft" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 400px;">
            <a href="{{ url('2h/coche-hotel/coche_paradise') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/coche/cocheparadise/cp.jpg') }}" alt="Hesperia Edén Club" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Coche Paradise</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow zoomInUp " data-wow-duration="2s" data-wow-delay="0.2s" style="height: 400px;">
            <a href="{{ url('2h/coche-hotel/sunsol_punta_blanca') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/coche/sunsol_punta_blanca.jpg') }}" alt="Sunsol Punta Blanca" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Sunsol Punta Blanca</h6>                            
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


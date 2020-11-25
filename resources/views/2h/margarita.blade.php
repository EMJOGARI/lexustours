@extends('layout')

@section('title')Isla Margarita @endsection

@section('section')<section class="bienvenido hot"> @endsection

@section('text')
    <h3 class="display-4">ISLA MARGARITA</h3">
    <h5>ENCUENTRA EL MEJOR HOTEL DE ACUERDO A TUS NECESIDADES</h5>    
@endsection

@section('content')
<div class="container"> 
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInLeft" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/lidotel_agua_dorada') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/lidotelaguadorada/lad.jpg') }}" alt="Agua Dorada Beach" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Agua Dorada Beach</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/hesperia_eden_club') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/hesperiaclubeden/hec01.jpg') }}" alt="Hesperia Edén Club" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Hesperia Edén Club</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
         <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/hesperia_isla_margarita') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/hesperia.jpg') }}" alt="Hesperia Isla Margarita" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Hesperia Isla Margarita</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInRight" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/hesperia_playa_el_agua') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/hesperiaplayaelagua/hpa.jpg') }}" alt="Hesperia Playa El Agua" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Hesperia Playa El Agua</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInLeft" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/ikin') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/ikin/ikin.jpg') }}" alt="Ikin" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Ikin</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/kokobay') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/kokobay/kok.jpg') }}" alt="Kokobay" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Kokobay</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/ld_h2otel') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/ldh2otel/ldh.jpg') }}" alt="LD H2OTEL" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">LD H2OTEL</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInRight" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/ld_palm_beach') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/ldpalmbeach/ldpb.jpeg') }}" alt="LD Palm Beach" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">LD Palm Beach</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>         
        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInLeft" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/ld_palm_beach_plus') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/ldpalmbeachplus/ldpbp.jpg') }}" alt="LD Palm Beach Plus" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">LD Palm Beach Plus</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/ld_suites_punta_playa') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/ldpuntaplaya/ldspp.jpg') }}" alt="LD Suites Punta Playa" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">LD Suites Punta Playa</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/le_flamboyant') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/leflamboyant/lf.jpg') }}" alt="LE Flamboyant" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">LD Le Flamboyant</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInRight" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/lidotel') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/lidotel/l05.jpg') }}" alt="Lidotel Hotel Boutique" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Lidotel</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInLeft" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/portofino') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/portofino.jpg') }}" alt="Portofino" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Portofino</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/dunes') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/dunes/dunes.jpeg') }}" alt="Dunes" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Sunsol Dunes Puerto Cruz</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/sunsol_isla_caribe') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/sunsol.jpg') }}" alt="Sunsol Isla Caribe" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Sunsol Isla Caribe</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div> 
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInRight" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/tibisay') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/tibisay/tib.jpg') }}" alt="Tibisay" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Tibisay</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInLeft" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/venetur') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/venetur/ven.jpg') }}" alt="Wyndham Concorde" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Venetur Margarita</h6>
                        </div>
                    </div>
                </div>                            
            </a>                
        </div>        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="height: 350px; padding-bottom: 2rem;">
            <a href="{{ url('2h/margarita-hotel/wyndham') }}">
                <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img" src="{{ url('/assets/img/hotels/margarita/wyndham/wyn.jpg') }}" alt="Wyndham Concorde" style="width: 100%; height: 100%;">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h6 class="card-text">Wyndham Concorde</h6>
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


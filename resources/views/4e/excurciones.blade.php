@extends('layout')

@section('title')Destino @endsection

@section('section')<section class="bienvenido hot"> @endsection

@section('m3') class= "active"@endsection

@section('text')
    <h3 class="display-4">EXCURSIONES </h3">    
@endsection

@section('content')

<div class="safari">
    <div class="row">               
        <div class="col-xs-12 col-md-4 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="margin-bottom: 1rem; height: 400px">
            <a href="{{ url('4e/excurcion/exc1') }}">
                <div class="card">
                    <img class="card-img" src="{{ url('/assets/img/excursiones/TRASLADO.jpg') }}" alt="Lexus Tours">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Traslados</h4>                            
                        </div> 
                    </div>
                </div>                            
            </a>                
        </div>
        <div class="col-xs-12 col-md-4 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="margin-bottom: 1rem; height: 400px">
            <a href="{{ url('4e/excurcion/exc10') }}">
                <div class="card">
                    <img class="card-img" src="{{ url('/assets/img/excursiones/city.jpg') }}" alt="Lexus Tours">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">City Tours</h4> 
                        </div>                      
                    </div>
                </div>                            
            </a>                
        </div> 
        <div class="col-xs-12 col-md-4 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="margin-bottom: 1rem; height: 400px">
            <a href="{{ url('4e/excurcion/exc2') }}">
                <div class="card">
                    <img class="card-img" src="{{ url('/assets/img/excursiones/AVENTURA.jpg') }}" alt="Lexus Tours">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Isla Aventura</h4> 
                        </div>                      
                    </div>
                </div>                            
            </a>                
        </div>  
        <div class="col-xs-12 col-md-4 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="margin-bottom: 1rem; height: 400px">
            <a href="{{ url('4e/excurcion/exc3') }}">
                <div class="card">
                    <img class="card-img" src="{{ url('/assets/img/excursiones/JEEP.jpg') }}" alt="Lexus Tours">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Jeep Safari</h4>
                        </div> 
                    </div>
                </div>                            
            </a>                
        </div>

        <div class="col-xs-12 col-md-4 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="margin-bottom: 1rem; height: 400px">
            <a href="{{ url('4e/excurcion/exc4') }}">
                <div class="card">
                    <img class="card-img" src="{{ url('/assets/img/excursiones/COMPRA.jpg') }}" alt="Lexus Tours">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Tours de Compras</h4> 
                        </div> 
                    </div>
                </div>                            
            </a>                
        </div>  
        <div class="col-xs-12 col-md-4 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style=" margin-bottom: 1rem; height: 400px">
            <a href="{{ url('4e/excurcion/exc5') }}">
                <div class="card">
                    <img class="card-img" src="{{ url('/assets/img/excursiones/COCHE.jpg') }}" alt="Lexus Tours">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Full Day Coche</h4>
                        </div>                      
                    </div>
                </div>                            
            </a>                
        </div>  
        <div class="col-xs-12 col-md-4 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="margin-bottom: 1rem; height: 400px">
            <a href="{{ url('4e/excurcion/exc6') }}">
                <div class="card">
                    <img class="card-img" src="{{ url('/assets/img/excursiones/CUBAGUA.jpg') }}" alt="Lexus Tours">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Full Day Cubagua</h4>
                        </div> 
                    </div>
                </div>                            
            </a>                
        </div> 
        <div class="col-xs-12 col-md-4 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="margin-bottom: 1rem; height: 400px">
            <a href="{{ url('4e/excurcion/exc7') }}">
                <div class="card">
                    <img class="card-img" src="{{ url('/assets/img/excursiones/NADO.jpg') }}" alt="Lexus Tours">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Nado con Delfines</h4>
                        </div> 
                    </div>
                </div>                            
            </a>                
        </div>  
        <div class="col-xs-12 col-md-4 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="margin-bottom: 1rem; height: 400px">
            <a href="{{ url('4e/excurcion/exc8') }}">
                <div class="card">
                    <img class="card-img" src="{{ url('/assets/img/excursiones/ENCUENTRO.jpg') }}" alt="Lexus Tours">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Encuentros con Delfines</h4>
                        </div>                      
                    </div>
                </div>                            
            </a>                
        </div>  
        <div class="col-xs-12 col-md-4 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="margin-bottom: 1rem; height: 400px">
            <a href="{{ url('4e/excurcion/exc9') }}">
                <div class="card">
                    <img class="card-img" src="{{ url('/assets/img/excursiones/CABALLO.jpg') }}" alt="Lexus Tours">
                    <div class="card-img-overlay">
                        <div class="sombra">
                            <h4 class="card-text">Paseo a Caballo</h4>
                        </div> 
                    </div>
                </div>                            
            </a>                
        </div> 
    </div>    
</div>


@endsection


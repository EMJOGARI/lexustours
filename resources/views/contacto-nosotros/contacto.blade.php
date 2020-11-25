@extends('layout')

@section('title')Contacto @endsection

@section('section')<section class="bienvenido contacto" id="tama"> @endsection

@section('m6') class= "active"@endsection

@section('text')
    <h1 class="display-4">Contactenos</h1>
@endsection

@section('content')
	<div class="container">
      <div class="row">
          <div class="col-md-5">
          		<h4 style="margin-bottom: 2rem">Información de Contacto</h4>
          		<div class="items-contacto">
          			<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                  <span>Av. Bolívar, C.C. AB, Nivel PL, Ofic. 21, Playa El Angel, Pampatar, Isla Margarita</span>
          		</div>
          		<div class="items-contacto">
          			<i class="fa fa-phone" aria-hidden="true"></i>
                  <span>(+58)(295) 262-4933 / 7512</span>
          		</div>
              <div class="items-contacto">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>Gerencia@lexustours.com</span>
              </div>
          		<div class="items-contacto">
          			<i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>Hoteles@lexustours.com</span>
          		</div>
              

          		<div class="items-contacto">
						<div class="items-siguenos">
							<h4>Siguenos</h4>          			
                     <a href="#"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
                     <a href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                     <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
						</div>
          				
                 
          		</div>

          </div>
          <div class="col-md-7">          	
          		<h4>Escríbenos</h4>          	
            	@include('form-emails-contacto')
          </div> 
      </div>
  </div>
	

@endsection

@section('con1')
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6940884932274!2d-63.82006998519732!3d10.986447143601053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318effc92d93b7%3A0x105ec423144684b4!2sCentro+Comercial+AB!5e0!3m2!1ses-419!2sve!4v1523838588070" width="800" height="600" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
@endsection 


@section('con2')	



@endsection 

@section('con3')
	
@endsection


@extends('layout')

@section('title')Blog @endsection

@section('section')<section class="bienvenido blog"> @endsection

@section('m4') class= "active"@endsection

@section('text')
    <h1 class="display-4">BLOG</h1>
    <h3 class="subtitle">Información para aprovechar al máximo tu viaje.</h3>
@endsection

@section('content')
	<div class="blog-jum">
	    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
	        <div class="col-md-12 px-0">        	
		        <h1 class="display-5 font-italic" style="color: #fff">Parque nacional Laguna de La Restinga</h1>	        
	        </div>
	        <div class="col-md-6 p-y-1">
	        	<p class="lead" style="color: #fff">El Parque Nacional Laguna de La Restinga es un parque nacional ubicado en el Estado Nueva Esparta en Venezuela. Este parque conforma la unión entre la parte oriental y occidental de la Isla de Margarita, ubicandose en en el municipio Tubores</p>
		        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold"></a></p>
	        </div>
	    </div>
	</div>

@endsection

@section('con1')
	<div class="container">
		<div class="blog-card">
			<div class="row">
		       	<div class="col-md-6">
		       		<div class="card">				 	
					 	<div class="card-body">
					    	<h4 class="card-title">Card title</h4>
					    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    	<a href="#!">Go somewhere</a>				    
					  </div>
					  <img class="card-img-top" src="{{ url('/assets/img/principal/manzanillo.jpg') }}" alt="Card image cap">
					</div>          
		       	</div>
		       	<div class="col-md-6">
		       		<div class="card">				 	
					 	<div class="card-body">
					    	<h4 class="card-title">Card title</h4>
					    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    	<a href="#!">Go somewhere</a>
					    </div>
					  <img class="card-img-top" src="{{ url('/assets/img/principal/medanos.jpg') }}" alt="Card image cap">
					</div>          
		       	</div>
		    </div> 
		</div>
	</div>	       
@endsection 


@section('con2')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
	    		<div class="blog-post">
		            <h2 class="blog-post-title">Sample blog post</h2>
		            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

		            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
		            <hr>
		            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
		            <blockquote>
		              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            </blockquote>
		            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>	
		        </div>            
	    	</div>
	    	<div class="col-md-4">	       		
				<img class="card-img-top" src="{{ url('/assets/img/principal/medanos.jpg') }}" alt="Card image cap" style='width: 100%; height: 350px'>				         
		    </div>

	    	<div class="col-md-12 p-y-1"></div>
		    
		    <div class="col-md-3">	       		
				<img class="card-img-top" src="{{ url('/assets/img/principal/medanos.jpg') }}" alt="Card image cap" style='width: 100%; height: 350px'>				         
		    </div>
		    <div class="col-md-9">
	    		<div class="blog-post">
		            <h2 class="blog-post-title">Sample blog post</h2>
		            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

		            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
		            <hr>
		            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
		            <blockquote>
		              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            </blockquote>
		            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>	
		        </div>            
	    	</div>	    	
	    </div> 
	</div>    
@endsection 


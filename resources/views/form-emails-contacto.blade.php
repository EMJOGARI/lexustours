                      
    {!! Form::open(
        [
            'route'  => 'email.store',
            'method' => 'POST', 
            'style'  => 'font-size: .8rem'
        ]) 
    !!} 
                          
        <dix class="row">
            <div class="col-lg-12" style="margin-top: 1rem;"></div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('name', 'Nombres y Apellidos *') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombres y Apellidos', 'required']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('tlf', 'Telefono *') !!}
                    {!! Form::text('tlf', null, ['class' => 'form-control', 'placeholder' => 'Telefono para Contactarlo', 'required']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('email', 'Correo Electronico *') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Hoteles@lexustours.com', 'required']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('pais', 'Pais *') !!}
                    {!! Form::text('pais', null, ['class' => 'form-control', 'placeholder' => 'Pais donde se Encuetra', 'required']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('msj', 'Observaciones') !!}
                    {!! Form::textarea('msj', null, ['class' => 'form-control', 'size' => '30x5']) !!}
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 1rem;">
                <div class="row">
                    <div class="col-md-4">             
                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                    </div>                    
                </div>
            </div>                      
        </dix>
    {!! Form::close() !!}

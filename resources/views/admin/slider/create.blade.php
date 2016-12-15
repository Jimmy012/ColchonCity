@extends('admin.template')

@section('content')
	
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-picture-o"></i>
				SLIDER <small>[Agregar Slider]</small>
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">
                    
                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    
                    {!! Form::open(['route'=>'admin.slider.store','method'=>'POST','files'=>true]) !!}
        
                        <div class="form-group">
                            <label for="titulo">Titulo:</label>
                            
                            {!! 
                                Form::text(
                                    'titulo', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre del slider...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>
                        
                          <div class="form-group">
                            <label for="image">Imagen:</label>                         
                            {!!Form::file('image')!!} 
                        </div>

                         <div class="form-group">
                            <label for="noticia">Descripción:</label>
                            
                            {!! 
                                Form::textarea(
                                    'noticia', 
                                    null, 
                                    array(
                                        'class'=>'form-control'
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="orden">Orden:</label>
                            
                            {!! 
                                Form::text(
                                    'orden', 
                                    1, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'En que orden desean el slider...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>

                         <div class="form-group">
                            <label for="estado">Visible:</label>
                            
                            {!! 
                                Form::checkbox(
                                    'estado', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ route('admin.category.index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        

	</div>

@stop
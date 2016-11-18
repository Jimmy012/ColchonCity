@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-picture-o"></i>
                SLIDER <small>[Editar Slider]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">
                    
                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    

                    {!! Form::model($slider, array('route' => array('admin.slider.update', $slider->id, 'method'=>'POST', 'enctype' => 'multipart/form-data'))) !!}
                    <!-- {!! Form::open(['route' =>'admin.slider.update', $slider->id,'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}-->
        
                    <input type="hidden" name="_method" value="PUT">       
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
                                    null, 
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
                            <input type="checkbox" name="estado" {{ $slider->estado == 1 ? "checked='checked'" : '' }}>
                        </div>
                        
                        
                        <div class="form-group">
                            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ route('admin.category.index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        

    </div>

@stop
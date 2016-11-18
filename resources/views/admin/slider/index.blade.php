@extends('admin.template')

@section('content')
	 <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-picture-o"></i> 
                SLIDER <a href="{{ route('admin.slider.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Slider</a>
            </h1>
        </div>

        <div class="page">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Imagen</th>
                            <th>Titulo</th>  
                            <th>Descripción</th>
                            <th>Orden</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                   <tbody>
						@foreach($sliders as $slider)
							<tr>
								<td>
									<a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
								<td>
									{!! Form::open(['route' => ['admin.slider.destroy', $slider->id]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    {!! Form::close() !!}
								</td>
								<td><img src="/tienda/slider/{{ $slider->imagen }}" width="60"></td>
                                <td>{{ $slider->titulo}}</td>
								<td>{{ $slider->noticia }}</td>
								<td>{{ $slider->orden }}</td>
								<td>{{ $slider->estado ==1 ? "Visible" : "No Visible"}}</td>
							</tr>
						@endforeach
					</tbody>
                </table>
            </div>
            <hr>             
        </div>

	</div>	
@stop
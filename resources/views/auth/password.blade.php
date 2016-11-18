@extends('store.template')

@section('content')
	<div class="container text-center">

		<div class="page-header">
		  <h1><i class="fa fa-unlock-alt"></i> Restablecer Contraseña </h1>
		</div>

		<div class="row">
		{!!Form::open(['url' => 'password/email'])!!}
			<div class="col-md-offset-2 col-md-8">
				<div class="page">
				@include('store.partials.errors')
					<div class="form-group">
					   <label for="email">Correo</label>
						<input class="form-control" type="email" {!!Form::text('email')!!} 
					</div>
				{!!Form::submit('Enviar link')!!}
				</div>
			</div>
			
		{!!Form::close()!!}
		</div>
	</div>
@stop
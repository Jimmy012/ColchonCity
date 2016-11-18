@extends('store.template')

@section('content')
	<div class="container text-center">

		<div class="page-header">
		  <h1><i class="fa fa-key"></i> Restablecer Contraseña</h1>
		</div>

		<div class="row">
		{!!Form::open(['url' => 'password/reset'])!!}
			<div class="col-md-offset-2 col-md-8">
				<div class="page">
				@include('store.partials.errors')
					<div class="form-group">
					   <label for="email">Correo</label>
					   	{!!Form::hidden('token',$token,null)!!} 
						<input class="form-control" type="email" {!!Form::text('email',null,['value' => "{{old('email')}}"])!!} 
					</div>
					 <div class="form-group">
					    <label for="password">Password</label>
					    <input class="form-control" type="password" {!!Form::password('password')!!}
					</div>

					<div class="form-group">
					    <label for="password_confirmation">Confirmar Password</label>
					     <input class="form-control" type="password" {!!Form::password('password_confirmation')!!}
					</div>
				{!!Form::submit('Restablecer Contraseña')!!}
				</div>
			</div>
		{!!Form::close()!!}
		</div>
	</div>
@stop
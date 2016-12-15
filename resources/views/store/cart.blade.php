@extends('store.template')
@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Carrito de compras</h1>
		</div>
		<div class="table-cart">
			@if(count($cart))
				<p>
					<a href="{{ route('cart-trash') }}" class="btn btn-danger">
						Vaciar carrito <i class="fa fa-trash"></i>
					</a>
				</p>
				<br>

				<div class="table-responsive">
					<table class="table table-striped table-hover table-bordered">
						<thead>
						<tr>
							<th>Imagen</th>
							<th>Producto</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Subtotal</th>
							<th>Quitar</th>
						</tr>
						</thead>
						@foreach($cart as $item)
							<tr data-id="{{ $item->quantity }}">
								<input style="display:none" readonly="readonly"  id="slug_{{$item->id}}" value="{{$item->slug}}">
								<td><img src="/tienda/productos/{{ $item->image }}" width="50" height="50"></td>
								<td>{{ $item->name }}</td>
								<td class="btn-group">
									 <!--Form::open(['route'=>'cart-update','method'=>'POST'],array('disabled'))-->
									<select name="precios" id="precios_{{ $item->id }}" >
										<optgroup>
											<option value="0"
													@if ($item->tipo_precio == 0)
													selected="selected"
													@endif
											>Seleccionar colchon</option>
										</optgroup>
										<optgroup label="Individual 1.00*1.90">
											<option value="1"
											@if ($item->tipo_precio == 1)
												selected="selected"
											@endif

												>{{$item->price}}</option>
										</optgroup>
										<optgroup label="Matrimonial 1.36*1.90">
											<option value="2"
													@if ($item->tipo_precio == 2)
													selected="selected"
													@endif
											>{{$item->precioMatri}}</option>
										</optgroup>
										<optgroup label="Queen-size 1.50*1.90">
											<option value="3"
													@if ($item->tipo_precio == 3)
													selected="selected"
													@endif
											>{{$item->precioQueen}}</option>
										</optgroup>
										<optgroup label="King-size 2.00*1.90">
											<option value="4"
													@if ($item->tipo_precio == 4)
													selected="selected"
													@endif
											>{{$item->precioKing}}</option>
										</optgroup>
									</select>

									<?php $r=$item->tipo_precio; ?>

									<input readonly="readonly" style="display:none" name="txtresultado">
								</td>
								<td>
									<input
											type="number"
											name=cantidad
											min="1"
											max="100"
											value="{{ $item->quantity }}"
											id="cantidad_{{ $item->id }}"
									>
									<a
											href="#"
											class="btn btn-warning btn-update-item"
											onclick="Enviar({{ $item->id}})"
									>
										<i class="fa fa-refresh"></i>
									</a>

									<!--<input type="submit" value="actualizar">-->
									<!---->
								</td>
								<td>
								<!--{{$item->quantity }}-->
									@if ($r == '1')
										<h4>${{ number_format($item->price * $item->quantity,2) }}</h4>
									@elseif ($r == '2')
										<h4>${{ number_format($item->precioMatri * $item->quantity,2) }}</h4>
									@elseif ($r == '3')
										<h4>${{ number_format($item->precioQueen * $item->quantity,2) }}</h4>
									@elseif ($r == '4')
										<h4>${{ number_format($item->precioKing * $item->quantity,2) }}</h4>
									@else
										Seleccione un colchon
									@endif

								</td>
								<td>
									<a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger">
										<i class="fa fa-remove"></i>
									</a>
								</td>
							</tr>
							@endforeach
							</tbody>
					</table><hr>

					<h3>
					<span class="label label-success">
						Total: ${{ number_format($total,2) }}
					</span>
					</h3>
				</div>
			@else
				<h3><span class="label label-warning">No hay productos en el carrito :(</span></h3>
			@endif
			<hr>
			<p>
				<a href="{{ route('productos') }}" class="btn btn-primary">
					<i class="fa fa-chevron-circle-left"></i> Seguir comprando
				</a>
				<a href="{{ route('order-detail') }}" class="btn btn-primary">
					Continuar <i class="fa fa-chevron-circle-right"></i>
				</a>
			</p>
		</div>

	</div>
	<br><br>
	<script type="text/javascript">
		var getXsrfToken = function() {
			var cookies = document.cookie.split(';');
			var token = '';
			for (var i = 0; i < cookies.length; i++) {
				var cookie = cookies[i].split('=');
				if(cookie[0] == 'XSRF-TOKEN') {
					token = decodeURIComponent(cookie[1]);
				}
			}

			return token;
		}

		jQuery.ajaxSetup({
			headers: {
				'X-XSRF-TOKEN': getXsrfToken()
			}
		});


		$('select#precios').on('change',function(){
			var valor = $(this).val();

			var parent_tr = $(this).parent().parent();
			var cantidad = $(parent_tr).find('input[id^="product"]').val();
			//var subtotal = (parseFloat(valor)*parseInt(cantidad)).toFixed(2);
			$(parent_tr).find('input[name="txtresultado"]').val(valor);
		});
		$('input[id^="product"]').on('change',function(){
			var cantidad = $(this).val();
			var parent_tr = $(this).parent().parent();
			var valor = $(parent_tr).find('select#precios').val();
			//var subtotal = (parseFloat(valor)*parseInt(cantidad)).toFixed(2);
			$(parent_tr).find('input[name="txtresultado"]').val(valor);
			console.log(valor);
		});
		function seleccionarSelects()
		{
			var selects_precios = $('input[name="precios"]');
		}
		function Enviar(id)
		{
			$.post( "actualizar_precio_cantidad", {
				slug:$('#slug_'+id).val(),
				precio:$('#precios_'+id+ " option:selected").text(),
				tipo_precio: $('#precios_'+id).val(),
				cantidad:  $('#cantidad_'+id).val()
			})
			.done(function( data ) {
				location.reload();
			});

		}
	</script>
@stop
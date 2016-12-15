<div class="panel panel-primary">
	
		<div class="panel-heading">
			<h3 class="panel-title">Categorias</h3>
		</div>
		<div class="panel-body">
			<ul class="list-group">
				@foreach($categories as $category)
					<li class="list-group-item">
						<span class="badge">{{ $category->products->count() }}</span>
						<a href="{{ route('store.search.category', $category->name) }}">
							{{ $category->name }}
						</a>
							
					</li>					
				@endforeach
			</ul>
		</div>
</div>

<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Tipos</h3>
	</div>

	<div class="panel-body">
		@foreach($tipo as $tipos)
			<li class="list-group-item">
				<span class="badge">{{ $tipos->products->count() }}</span>
				<a href="{{ route('store.search.tipo', $tipos->nombre) }}">
					{{ $tipos->nombre}}
				</a>	
			</li>
		@endforeach
	</div>
</div>

<div class="asesor">
    <a href="{{ route('asesor.index') }}"><img src="/img/mini.jpg" height="60"  width="220" alt=""/></a>
 </div>  
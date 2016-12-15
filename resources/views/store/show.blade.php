@extends('store.template')

@section('content')

<div class="column_center">
  <div class="container">
	<!--<div class="search">
	  <div class="stay">Buscar Productos</div>
	  <div class="stay_right">
		  <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
		  <input type="submit" value="">
	  </div>
	  <div class="clearfix"> </div>
	</div>-->
    <div class="clearfix"> </div>
  </div>
</div>

<div class="main">
  <div class="content_top">
  	<div class="container">
	   <div class="col-md-3 sidebar_box">
	   	  @include('store.partials.asideproduct')
	   </div> 
	   <div class="col-md-9 single_right">
	   	<div class="single_top">
	       <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="/tienda/productos/{{ $product->image }}"  width="260" height="200" class="img-responsive" />
									<img class="etalage_source_image" src="/tienda/productos/{{ $product->image }}"  width="260" height="200" class="img-responsive" title="" />
								</a>
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  	<h1> {{ $product->name }}</h1>
				<div class="quantity_box">
					<ul class="product-qty">
					   <span>Precios:</span>
					   <select>
						 <option>Precio Individual: ${{ number_format($product->price,2) }}</option>
						 <option>Precio Matrimonial: ${{ number_format($product->precioMatri,2) }}</option>
						 <option>Precio Queen: ${{ number_format($product->precioQueen,2) }}</option>
						 <option>Precio King-size: ${{ number_format($product->precioKing,2) }}</option>
					   </select>
				    </ul>
		   		    <div class="clearfix"></div>
	   		    </div>
				<h2 class="quick">Descripción:</h2>
				<p class="quick_desc">{{ $product->description }}</p>

			    <a href="{{ route('cart-add', $product->slug) }}" title="Online Reservation" class="btn bt1 btn-primary btn-normal btn-inline " target="_self">Añadir</a>
			    <a href="{{ route('productos') }}" title="Online Reservation" class="btn bt1 btn-primary btn-normal btn-inline " target="_self">Regresar</a>
			</div>
		    <div class="clearfix"> </div>
				</div>
			<br>
			<br>	
		<h3 class="single_head">Otros Productos</h3>	
	    <div class="related_products">
        @foreach($products as $product)
          <div class="col-md-4 top_grid1-box1"><a href="{{ route('product-detail', $product->slug) }}">
            <div class="grid_1">
              <div class="b-link-stroke b-animate-go  thickbox">
                <img src="/tienda/productos/{{ $product->image }}" width="260" height="200" class="img-responsive" alt=""/> </div>
              <div class="grid_2">
              <i class="fa fa-folder-open-o"></i> <a href="{{ route('store.search.category', $product->category->name) }}">{{ $product->category->name}}</a>
              <br>
                <p>Desde: ${{ number_format($product->precioMatri,2 )}}</p>
                <ul class="grid_2-bottom">
                    <li class="grid_2-left"><h4>{{ $product->name }}</h4></li>
                    <li href="{{ route('cart-add', $product->slug) }}" class="grid_2-right">
                      <a href="{{ route('cart-add', $product->slug) }}" title="Online Reservation" class="btn btn-primary btn-normal btn-inline " target="_self">Añadir
                      </a>
                    </li>
                    <div href="{{ route('cart-add', $product->slug) }}" class="clearfix"> </div>
                </ul>
              </div>
            </div>
            <br>
         </a></div>
         @endforeach
	    </div> 
        </div>
        {!! $products->render() !!} 
      </div> 
	</div>
</div>
</div>
<br>
@stop
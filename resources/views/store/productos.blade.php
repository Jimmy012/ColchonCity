@extends('store.template')

@section('content')

<body>
<div class="column_center">
  <div class="container">
    <!--<div class="search">
      <div class="stay">Buscar Producto</div>
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
      <div class="col-md-9 content_right">
        <div class="top_grid2">
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
                    <li class="grid_2-left"><h5>{{ $product->name }}</h5></li>
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

</body>
@stop
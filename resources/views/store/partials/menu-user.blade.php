<div class="container">
      <div class="logo">
        <a href="{{ route('home') }}"><img src="/img/logo.png" alt=""/></a>
      </div>
@if(Auth::check())
		<ul class="shopping_grid">
			<li><a href="{{ route('logout') }}">Finalizar sesión</a></li>
		</ul>
		<ul class="shopping_grid">
			<li><a>{{ Auth::user()->user }}</a></li>
			<a href="{{ route('cart-show') }}"><li><span class="m_1">Carrito</span><img src="/img/bag.png" alt=""/></li></a>
		</ul>
@else
			<ul class="shopping_grid">
	            <a href="{{ route('register-get') }}"><li>Registrarse</li></a>
	            <a href="{{ route('login-get') }}"><li>Iniciar Sesión</li></a>
	            <a href="{{ route('cart-show') }}"><li><span class="m_1">Carrito</span><img src="/img/bag.png" alt=""/></li></a>
            	<div class="clearfix"> </div>
      		</ul>
       	 <div class="clearfix"> </div>
@endif
</div>
    
      
   
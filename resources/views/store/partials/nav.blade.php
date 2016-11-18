<div class="header">
  <div class="header_top">
    @include('store.partials.menu-user')
  </div>
  <div class="h_menu4"><!-- start h_menu4 -->
    <div class="container">
        <a class="toggleMenu" href="#">Menu</a>
        <ul class="nav">
          <li><a href="{{ route('home') }}" data-hover="Home">Inicio</a></li>
          <li><a href="{{ route('nosotros') }}" data-hover="About Us">Nosotros</a></li>
          <li><a href="{{ route('productos') }}" data-hover="Careers">Productos</a></li>
          <li><a href="{{ route('pago') }}" data-hover="Contact Us">Formas De Pago</a></li>
          <li><a href="{{ route('sucursales') }}" data-hover="Company Profile">Sucursales</a></li>
          <li><a href="{{ route('contacto') }}" data-hover="Company Registration">Contactanos</a></li>
         </ul>
         <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
        </div><!-- end h_menu4 -->
     </div>
</div>
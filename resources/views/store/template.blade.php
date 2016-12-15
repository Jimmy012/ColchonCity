<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'ColchonCyty')</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
	<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<link type='text/css' rel='stylesheet' href="{{ asset('css/font-awesome.min.css') }}"/>
	<link type='text/css' rel='stylesheet' href="{{ asset('css/font-awesome.css') }}"/>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Custom Theme files -->
	<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/responsiveslides.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/hover_pack.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('css/etalage.css') }}">
	<script src="{{ asset('js/jquery.etalage.min.js') }}"></script>

	<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script type="text/javascript" src="{{ asset('js/hover_pack.js') }}"></script>

		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
		<script src="{{ asset('js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
        </script>

</head>
<body>

	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif
	
	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')

	
	<script src="{{ asset('js/plantilla/pinterest_grid.js') }}"></script>
	<script src="{{ asset('js/plantilla/main.js') }}"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href='assets/images/layout/icon.png' rel='shortcut icon' type='image/png'>
	<title>@yield('title')</title>
		{{ HTML::style('assets/stylesheets/bootstrap/bootstrap.css')}}
	{{ HTML::style('assets/stylesheets/bootstrapValidator.min.css')}}
	{{HTML::style('assets/stylesheets/styles-general.css')}} 
    <link rel="stylesheet" href="assets/stylesheets/font-awesome/css/font-awesome.min.css">
	    {{HTML::style('assets/stylesheets/styles-menu.css')}} 
    {{HTML::style('assets/stylesheets/styles-footer.css')}} 
<!-- 	{{ HTML::style('assets/stylesheets/fraction/fractionslider.css')}} -->
	<script src="//code.jquery.com/jquery.js"></script>
	{{ HTML::script('assets/javascripts/bootstrap.js')}}
<!-- 	{{ HTML::script('assets/javascripts/jquery.fractionslider.min.js')}} -->
<!-- 	{{ HTML::script('assets/javascripts/inicio.js')}} -->
	
	{{ HTML::style('assets/fractionslider2/css/style.css') }}
	{{ HTML::style('assets/fractionslider2/css/fractionslider.css') }}
	{{ HTML::script('assets/fractionslider2/js/jquery-1.9.0.min.js') }}

</head>
<body>
	<header>
		<div class="wrap-menu">
			<?php echo View::make('parciales.menu-nuevo') ?>
		</div>
		<div class="hidden-xs">
		<?php echo View::make('parciales.slider2-d1') ?>
		<?php //echo View::make('parciales.slider-d1') ?>
		</div>
		<div class="visible-xs separador-dip-xs">
		</div>
	</header>
	<div class="wrap-container-diplomado">
		<div id="diplomado">
			<div class="container">
					@yield('content')
				<div class="row">
					<div class="col-md-12">
					<a href="@yield('atras')">
						<div class="atras">{{ HTML::image('assets/images/diplomados/flecha-peq.png', $alt="Atrás") }}</div>
					</a>
					</div>
				</div>
			</div>
		</div>
		<div class="inscribete">
			@yield('enlace')
		</div>
	</div>
	<footer>
		<div class="container">
			<?php echo View::make('parciales.footer-nuevo') ?>
		</div>
	</footer>
	{{ HTML::script('assets/fractionslider2/js/jquery.fractionslider.js') }}
	{{ HTML::script('assets/fractionslider2/js/main.js') }}
</body>
</html>
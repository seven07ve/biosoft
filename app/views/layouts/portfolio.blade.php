<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>@yield('title')</title>
	<link href='assets/images/layout/icon.png' rel='shortcut icon' type='image/png'>

	{{ HTML::style('assets/stylesheets/bootstrap/bootstrap.css')}}
	{{ HTML::style('assets/stylesheets/bootstrapValidator.min.css')}}
	<!--Estilos pagina nueva-->
	{{HTML::style('assets/stylesheets/styles-general.css')}} 
    <link rel="stylesheet" href="assets/stylesheets/font-awesome/css/font-awesome.min.css">
    {{HTML::style('assets/stylesheets/styles-menu.css')}} 
    {{HTML::style('assets/stylesheets/styles-footer.css')}} 
	
	<script src="//code.jquery.com/jquery.js"></script>
	{{ HTML::script('assets/javascripts/bootstrap.js')}}
	{{ HTML::script('assets/javascripts/menu.js')}}
	<!--Portfolio-->
	{{ HTML::style('assets/portfolio/css/portfolio.css') }}
    {{ HTML::script('assets/portfolio/js/jquery-1.3.2.min.js') }}
    {{ HTML::script('assets/portfolio/js/filterable.js') }}
   
</head>
<body>
	<header>
		<div class="wrap-menu">
			<?php echo View::make('parciales.menu-nuevo') ?>
		</div>
	</header>
	<div class="wrap-container wrap-otra">
			@yield('content')
	</div>
	<footer>
		<div class="container">
			<?php echo View::make('parciales.footer-nuevo') ?>
		</div>
	</footer>
</body>
</html>
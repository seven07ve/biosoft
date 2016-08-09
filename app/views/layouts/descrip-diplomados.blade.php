<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>@yield('title')</title>
	<link href='assets/images/layout/icon.png' rel='shortcut icon' type='image/png'>
	{{ HTML::style('assets/stylesheets/bootstrap/bootstrap.css')}}
	{{ HTML::style('assets/stylesheets/bootstrapValidator.min.css')}}
		{{ HTML::style('assets/stylesheets/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('assets/stylesheets/styles-general.css')}}
    {{HTML::style('assets/stylesheets/styles-menu.css')}} 
    {{HTML::style('assets/stylesheets/styles-footer.css')}} 
	<script src="//code.jquery.com/jquery.js"></script>
	{{ HTML::script('assets/javascripts/bootstrap.js')}}
	{{ HTML::script('assets/javascripts/menu.js')}}
	{{ HTML::script('assets/javascripts/bootstrapValidator.min.js')}}
	{{ HTML::script('assets/javascripts/cursos.js')}}
</head>
<body>
	<header>
		<div class="wrap-menu">
			<?php echo View::make('parciales.menu-nuevo') ?>
		</div>
	</header>

	<div class="wrap-container wrap-otra">
	<div class="row">
		<div class="col-md-12 separador"><br></div>
	</div>
	<div id="descr-dip">
		<div class="container" id="vaisid">
			<div class="row titulo">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h1>
						@yield('titulo')
					</h1>
				</div>
				<div class="col-md-1">
				</div>
			</div>
			<div class="row descripcion">
				<div class="col-md-offset-1 col-md-10">
					<p>
					@yield('img')
					@yield('descripcion')
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<a href="Diplomados-Cursos">
					<div class="atras">{{ HTML::image('assets/images/diplomados/flecha-peq.png', $alt="Atrás") }}</div>
				</a>
				</div>
			</div>
		</div>
	</div>
	</div>
	<footer>
		<div class="footer-der">
			<div id="wrap-footer">
				<?php echo View::make('parciales.footer-nuevo') ?>
			</div>
		</div>
	</footer>
</body>
</html>
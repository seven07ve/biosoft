<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>@yield('title')</title>
	<link href='assets/images/layout/icon.png' rel='shortcut icon' type='image/png'>

	
	{{ HTML::style('assets/stylesheets/bootstrap/bootstrap.css')}}
	{{ HTML::style('assets/stylesheets/bootstrapValidator.min.css')}}
	{{HTML::style('assets/stylesheets/styles-general.css')}} 
    <link rel="stylesheet" href="assets/stylesheets/font-awesome/css/font-awesome.min.css">
    {{HTML::style('assets/stylesheets/styles-menu.css')}} 
    {{HTML::style('assets/stylesheets/styles-footer.css')}} 
	{{-- {{ HTML::style('assets/stylesheets/styles.css') }}
	{{ HTML::style('assets/stylesheets/new-styles.css') }} --}}
	
		<!--Estilos pagina nueva-->
	
	<script src="//code.jquery.com/jquery.js"></script>
	{{ HTML::script('assets/javascripts/bootstrap.js')}}
	{{ HTML::script('assets/javascripts/menu.js')}}
    <link rel="stylesheet" type="text/css" href="assets/collageplus/support/examples.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/collageplus/css/transitions.css" media="all" />
    <script src="assets/collageplus/jquery.collagePlus.js"></script>
    <script src="assets/collageplus/extras/jquery.removeWhitespace.js"></script>
    <script src="assets/collageplus/extras/jquery.collageCaption.js"></script>
    
<script type="text/javascript">

    // All images need to be loaded for this plugin to work so
    // we end up waiting for the whole window to load in this example
    $(window).load(function () {
        $(document).ready(function(){
            collage();
            $('.Collage').collageCaption();
        });
    });


    // Here we apply the actual CollagePlus plugin
    function collage() {
        $('.Collage').removeWhitespace().collagePlus(
            {
                'fadeSpeed'     : 2000,
                'targetHeight'  : 200
            }
        );
    };

    // This is just for the case that the browser window is resized
    var resizeTimer = null;
    $(window).bind('resize', function() {
        // hide all the images until we resize them
        $('.Collage .Image_Wrapper').css("opacity", 0);
        // set a timer to re-apply the plugin
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
    });

</script>
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
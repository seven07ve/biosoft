<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href='assets/images/layout/icon.png' rel='shortcut icon' type='image/png'>
	<title>@yield('title')</title>
		<!--Bootstrap-->
	{{ HTML::style('assets/stylesheets/bootstrap/bootstrap.css')}}

    <!--Carrousel-->
    {{ HTML::style('assets/owl-carousel/owl.carousel.css') }}
    {{ HTML::style('assets/owl-carousel/owl.theme.css') }}
    <!--Normalize-->
    {{ HTML::style('assets/normalize/normalize.css') }}
    <!--Estilos pagina nueva-->
    {{ HTML::style('assets/stylesheets/styles-general.css')}}
    {{HTML::style('assets/stylesheets/styles-menu.css')}} 
    {{HTML::style('assets/stylesheets/styles-footer.css')}} 
        <!--Jquery-->
    {{ HTML::script('http://code.jquery.com/jquery-2.2.0.min.js') }}
    <!--Bootstrap js-->
	{{ HTML::script('assets/javascripts/bootstrap.js')}}
<!--    <link rel="stylesheet" type="text/css" href="assets/collageplus/support/examples.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/collageplus/css/transitions.css" media="all" />-->

    <!--[if lt IE 9]>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <![endif]-->
    <!--[if (gte IE 9) | (!IE)]><!-->
        <!--<![endif]-->

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--Slider Ppal-->
    {{ HTML::style('/assets/camera/css/camera.css') }}
    {{ HTML::script('assets/camera/scripts/jquery.min.js') }}
    {{ HTML::script('assets/camera/scripts/jquery.mobile.customized.min.js') }}
    {{ HTML::script('assets/camera/scripts/jquery.easing.1.3.js') }}
    {{ HTML::script('assets/camera/scripts/camera.min.js') }}
   
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
<script>
		jQuery(function(){		
			jQuery('#camera_wrap_1').camera({
                height: '500px',
				loader: 'bar',
				pagination: false,
                loader: 'bar',
                time: 2500,
                transPeriod: 750,
                navigation: true,
                playPause: true,
                pauseOnClick: false,
                thumbnails: false,
                hover: false,
                opacityOnGrid: false,
                imagePath: 'assets/camera/images/'
			});
		});
</script>
</head>
<body>
	<header>
		<div class="wrap-menu">
			<?php echo View::make('parciales.menu-nuevo') ?>
		</div>
		<?php echo View::make('parciales.camera-slider') ?>
	</header>
	<div class="wrap-container">
			@yield('content')
	</div>
	<footer>
		<div class="container">
			<?php echo View::make('parciales.footer') ?>
		</div>
	</footer>
</body>
<!--Carrousel js-->
{{ HTML::script('assets/owl-carousel/owl.carousel.js') }}
<script type="text/javascript">
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 5,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});
/*    $(document).on('ready', function() {
        $('.autoplay').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    });*/
</script>
</html>
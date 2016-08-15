<script>
jQuery("document").ready(function($){
	
	var nav = $('.navbar-collapse');
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 10) {
			nav.addClass("f-nav");
		} else {
			nav.removeClass("f-nav");
		}
	});

});
</script>
  <nav class="navbar navbar-default " role="navigation">
  <div class="container-fluid">
    <div class= "top-cabecera">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      
    </div> 

  </div> <!-- /.container-fluid -->

  <div class="collapse navbar-collapse" id="bs-menu">
    <div class="logo-biosoft">
        {{ HTML::image('assets/images/layout/logo_headernew.png',
                  $alt="Biosof c.a", $attributes = array('with' => 120, 'class' => 'img-responsive')) }}
    </div>
    <ul class="ph-line-nav nav navbar-nav">
      <li class="{{Request::path() == '/' ? 'active' : '';}}">{{ HTML::link('/', 'INICIO'); }}</li>
      <li class="{{Request::path() == 'sobrebio' ? 'active' : '';}}">{{ HTML::link('sobrebio', 'SOBRE BIOSOFT'); }}</li>
      <li class="{{Request::path() == 'equipo' ? 'active' : '';}}">{{ HTML::link('equipo', 'EQUIPO'); }}</li>
      <li class="{{Request::path() == 'metodos' ? 'active' : '';}}">{{ HTML::link('metodos', 'MÉTODOS'); }}</li>
      <li class="{{Request::path() == 'consultoria' ? 'active' : '';}}">{{ HTML::link('consultoria', 'CONSULTORÍA'); }}</li>
      <li class="{{Request::path() == 'capacitacion' ? 'active' : '';}}">{{ HTML::link('capacitacion', 'CAPACITACIÓN'); }}</li>
      <li class="{{Request::path() == 'portafolio' ? 'active' : '';}}">{{ HTML::link('portafolio', 'PORTAFOLIO'); }}</li>
      <li class="{{Request::path() == 'contacto' ? 'active' : '';}}">{{ HTML::link('contacto', 'CONTACTO'); }}</li>
      <div class="effect"></div>
      </ul> <!-- /.navbar-nav -->
  </div> 
  
</nav><!-- /.nav -->
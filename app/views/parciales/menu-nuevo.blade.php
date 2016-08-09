<nav class="navbar navbar-default " role="navigation">
  <div class="container-fluid">
    <div class= "top-cabecera">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <div class="logo-biosoft">
        {{ HTML::image('assets/images/layout/logo_headernew.png',
                  $alt="Biosof c.a", $attributes = array('width' => 212, 'height' => 80,
                    'class' => 'img-responsive')) }}
      </div>
    <div class="telefonos">
        <div class="telelocal">
          <p>Telf: (+58) 274-7892669</p>
        </div>
        <div class="email">
          <p>atencion@biosoftca.com</p>
        </div>
      </div>
          <div class= "redes">
      <!--correo--> 
      <div class="correo">
        <a href="contacto"> 
          <i class="fa fa-envelope" aria-hidden="true"></i>
        </a>
      </div>
      <!--instagram-->
      <div class="instagram">
        <a href="https://www.instagram.com/biosoftca/" target="_blank"> 
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </div>

      <!--twitter-->
      <div class="twitter">      
        <a href="https://twitter.com/biosoftca" target="_blank">
          <i class="fa fa-twitter-square" aria-hidden="true"></i> 
        </a>
      </div>

      <div class="facebook">
        <a href="https://www.facebook.com/Biosoftca-1622725348051680/" target="_blank">  
          <i class="fa fa-facebook-square" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    </div> 

  </div> <!-- /.container-fluid -->

  <div class="collapse navbar-collapse" id="bs-menu">
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
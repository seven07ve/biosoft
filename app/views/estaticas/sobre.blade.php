@extends ('layouts.otras')

@section ('title') 
	Sobre Biosoft
@stop

@section ('content')
	{{ HTML::image('assets/images/sobre/empresa-banner.jpg', $alt="imagen 1", $attributes = array('width' => "100%", 'height' => "241px", 'class' => 'img-responsive hidden-xs')) }}

<div class="container sobre">
    <div class="row">
       <h2 class="titulo-seccion">Sobre Biosoft</h2>
        <div class="col-md-12">
                <br>
                <p class="eslogan text-center"><span class="naranja">"En BioSoft somos Talento Venezolano que da vida a sus proyectos."</span>
                </p>
                <hr>
            <div class="row">
                <div class="col-xs-12 col-md-offset-1 col-md-10">
                    {{ HTML::image('assets/images/sobre/empresa-sobre.jpg', $alt="imagen 1", $attributes = array('width' => "100%", 'height' => "241px", 'class' => 'img-responsive', 'style' => "border:1px solid #000")) }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-offset-1 col-md-10">
                    <p class="text-justify">BioSoft es Gestión Informática e Ingeniería de Software a su medida. Prestamos servicios de Desarrollo, Capacitación y Consultoría generándole valor a su compañía. Nuestro equipo multidisciplinario, con una enorme experiencia, le brinda soluciones rápidas, efectivas, eficaces y según sus necesidades.</p>
                </div>
            </div>
                <hr>
                <br>
        </div>
    </div>
</div>
<div class="capacidad container">
        <div class="row">
           <h2 class="titulo-seccion">Lo que Sabemos</h2>
           <br>
           <div class="sobre-secc">
            <div class="col-md-5 text-justify triangulo">
                <div class="cont-texto">
                    <p>Somos un equipo de desarrollo de software ágil. Construimos desde cero, desarrollamos en base de tecnologías como: Ruby on Rails, PHP, HTML5, CSS y JavaScript, jquery, Bootstrap, Wordpress, Drupal, Modlee, bases de datos MySQL y PostgreSQL e Integración BD. Nos encantaría ayudarle con sus necesidades de desarrollo de productos o aumentar la productividad de su empresa con métodos y modelos balanceados agiles que le ayudarán a implementar las mejores prácticas de gestión empresarial.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-7 sobre-img izq oscuro">
                    {{ HTML::image('assets/images/sobre/herramientas.jpg', $alt="imagen 1", $attributes = array('width' => "100%",  'class' => 'img-responsive')) }}
            </div>
            <br clear="all"></div>
        </div>
        <div class="row">
          <br><br>
           <h2 class="titulo-seccion">Lo que Hacemos</h2>
           <br><br>
           <div class="sobre-secc">
            <div class="col-xs-12 col-md-7 sobre-img der claro">
                    {{ HTML::image('assets/images/sobre/hacemos.jpg', $alt="imagen 1", $attributes = array('width' => "100%",  'class' => 'img-responsive')) }}
            </div>
            <div class="col-md-5 text-justify triangulo-izq">
                <div class="cont-texto">
                    <p>Desarrollamos software a medida para grandes empresas, aplicaciones web para PYMES, diseño y rediseño web. Además hacemos Modelado y Gestión de Procesos de Negocio, Arquitectura Orientada a Servicios SOA, planificación de arquitectura empresarial. Adicionalmente impartimos Diplomados y cursos certificados en BPM e Ingeniería de Requisitos, impartimos cursos gratuitos, en Línea, Masivos y Abiertos en Ingeniería del Software, dictamos cursos y talleres presenciales.</p>
                </div>
            </div>
            <br clear="all"></div>
        </div>
</div>	
<div class="container cont-porque">
    <div class="row">
        <div class="col-md-12">
           <br><br>
            <h2 class="titulo-seccion">Por qué nosotros</h2>
            <br><br>
            <div class="row text-center">
               <div class="col-md-4">
                <div class="porque">
                    {{ HTML::image('assets/images/inicio/desarrollo.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                    <hr>
                    <a href="portafolio#desarrollo">
			            <h3 class="capacitacion">DESARROLLO DE SOFTWARE</h3>
                       </a>
                    <ul class="check-list">
                        <li>Tenemos experiencia de 20 años en desarrollo de software</li>
                        <li>Nos especializamos en aplicaciones web para soportar procesos de negocio</li>
                        <li>Usamos métodos ágiles, herramientas CASE y lenguaje de modelado UML</li>
                        <li>Desarrollamos software guiado por pruebas</li>
                        <li>Programamos en Ruby on Rails</li>
                    </ul>
                    <hr>
                </div>
                </div>
                <div class="col-md-4">
                <div class="porque">
                    {{ HTML::image('assets/images/inicio/consultoria.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                    <hr>
			        <a href="consultoria">
			                <h3 class="capacitacion">
				            CONSULTORÍA
			            </h3>
                    </a>
                   <ul class="check-list">
                        <li>Alineamos las TIC al negocio</li>
                        <li>Tenemos alta experiencia profesional y estudios de 4to y 5to nivel</li>
                        <li>Asesoramos a grandes empresas nacionales e internacionales</li>
                        <li>Nos enfocamos en tecnologías de punta: BPM, SOA, Arquitecturas empresariales</li>
                    </ul>
                    <hr>
                </div>
                </div>
                <div class="col-md-4">
                <div class="porque">
                    {{ HTML::image('assets/images/inicio/capacitacion.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                    <hr>
			        <a href="capacitacion">
			                <h3 class="capacitacion">
				            CAPACITACIÓN
			            </h3>
                    </a>
                    <ul class="check-list">
                        <li>Contamos con profesores de 4to y 5to nivel académico</li>
                        <li>Tenemos experiencia de 20 años en formación de profesionales en Ingeniería de Software</li>
                        <li>Orientamos la capacitación a la práctica profesional</li>
                        <li>Capacitamos para que seas competitivo en tecnologías de información</li>
                    </ul>
                    <hr>
                </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>
	<script src="assets/javascripts/jquery-ui.min.js"></script>
	<script>
	$(function() {
		$( "#accordion" ).accordion();
	});
	</script>
@stop
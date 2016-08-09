@extends ('layouts.otras')

@section ('title') 
	Cursos In Company
@stop

@section ('content')
	{{ HTML::image('assets/images/curso/cabecera-cursos.jpg',
	$alt="imagen 1", $attributes = array('class' => 'img-responsive')) }}
	<div id="cursos" style="margin-top: 0px;">
		<div class="container">
			<div class="row titulo">
				<div class="col-sm-12 col-md-12">
					<h2 class="titulo-seccion">Cursos y Talleres <i>In Company</i></h2>
					<p>Para las empresas e instituciones interesadas en capacitar a su personal, bajo la modalidad presencial In Company, BIOSOFT ofrece  una amplia  variedad de cursos y talleres en las áreas de Ingeniería de Software y Gerencia Informática. Estos cursos se pueden adaptar  a las necesidades y requisitos particulares de su empresa y se dictan de acuerdo a una programación conveniente para ambas partes.</p>
				</div>
			</div>
			<div class="row lista">
				<div class="hidden-xs col-sm-1 col-md-1">
					{{ HTML::image('assets/images/capacitacion/is.fw.png', 
						$alt="imagen 1", $attributes = array('class' => 'img-responsive nomb-areas')) }}
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 is">
				<div class="hidden-xs iconos-cursos">
					{{ HTML::image('assets/images/capacitacion/cursos-is.jpg', 
						$alt="imagen 1", $attributes = array('class' => 'img-responsive  nomb-areas')) }}
				</div>
				<h2 class="visible-xs">Ingeniería del Software</h2>
					<ul>
						<li><a href="cursos/uml">Desarrollo de Software con UML</a></li>
						<li><a href="cursos/desoftdd">Desarrollo de Software Guiado por Pruebas (TDD) con Ruby on Rails</a></li>
						<li><a href="cursos/metodosagiles">Desarrollo de Software: Métodos Ágiles y Balanceados (Scrum, XP y Blue WATCH)
						</a></li>
						<li><a href="cursos/modeladonegocios">Modelado de Negocios con UML 2.5 y BPMN 2.0
						</a></li>
						<li><a href="cursos/ingrequisitos">Ingeniería de Requisitos con UML
						</a></li>
						<li><a href="cursos/arqsoftware">Diseño de Arquitecturas de Software
						</a></li>
						<li><a href="cursos/analdissoft">Análisis y Diseño de Software Orientado a Objetos</a>
						</li>
						<li><a href="cursos/disenosoft">Diseño de Software Basado en Servicios (SOA)
						</a></li>
						<li><a href="cursos/pruebsoft">Pruebas de Software: Técnicas y Gestión
						</a></li>
						<li><a href="cursos/gestproy">Gestión de Proyectos de Software con PMBOK
						</a></li>
					</ul>
				</div>
				<div class="hidden-xs col-sm-1 col-md-1 titulo">
					{{ HTML::image('assets/images/capacitacion/gi.fw.png', 
						$alt="imagen 1", $attributes = array('class' => 'img-responsive nomb-areas')) }}
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 gi">
				<div class="hidden-xs iconos-cursos">
					{{ HTML::image('assets/images/capacitacion/cursos-gi.jpg', 
						$alt="imagen 1", $attributes = array('class' => 'img-responsive nomb-areas')) }}
				</div>
				<h2 class="visible-xs">Gestión Informática</h2>
					<ul>
						<li><a href="cursos/arqempres">Arquitecturas Empresariales con TOGAF 9.1</a></li>
						<li><a href="">Modelado de Arquitecturas Empresaiales con ArchiMate 2.0</a></li>
						<li><a href="cursos/fundgestproc">Fundamentos de Gestión de Procesos de Negocio - BPM
						</a></li>
						<li><a href="cursos/tallmodbpmn">La Notación de Modelado de Procesos de Negocio - BPMN 2.0</a></li>
						<li><a href="cursos/modeladonegocios">Arquitectura de negocio: Análisis y modelado de empresas</a>
</li>
						<li><a href="cursos/gestriesgo">Gestión de Riesgos, Configuración y Calidad
						</a></li>
						<li><a href="cursos/gestproy">Gestión de Proyectos Informáticos con PMBOK
						</a></li>
					</ul>
				</div>
			</div>
		<div class="row titulo">
			<div class="col-md-12">
				<h2>&nbsp;</h2>
				<a href="capacitacion">
					<div class="atras">{{ HTML::image('assets/images/diplomados/flecha-peq.png', $alt="Atrás") }}</div>
				</a>
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
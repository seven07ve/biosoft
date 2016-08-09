@extends ('layouts.otras')

@section ('title') 
	Capacitación
@stop

@section ('content')
	{{ HTML::image('assets/images/capacitacion/cabecera.jpg',
	$alt="imagen 1", $attributes = array('width' => "100%", 'height' => "241px",
	'class' => 'img-responsive')) }}


	<div id="epraxis">
		<div class="container" id="vaisid">
			<div class="row">
			  	<div class="col-sm-5 col-md-4">
					<div class="thumbnail">
						{{ HTML::image('assets/images/capacitacion/logo-vaisid.jpg', '', $attributes = array('class' => 'img-responsive')) }}
					<div class="caption">
						<h4>Diplomado y cursos certificados en BPM e Ingeniería de Requisitos<br><br></h4>
						
						<p class="text-justify">Biosoft ofrece, en alianza estratégica con el Instituto de Investigación y Desarrollo “Virtual Academic ISID (VA ISID)” y la Universidad de Nueva Esparta, un diplomado y cursos certificados en línea dirigidos, especialmente, a capacitar profesionales de las áreas de Gestión de Procesos de Negocios (BPM – Business Process Management) e Ingeniería de Requisitos (Requirements Engineering).<br><br><br></p>
						<p class="text-right">
						{{ HTML::link('Diplomados-Cursos', 'más', array('class' => 'btn btn-primary btn-sm','role'=>'button')); }}
						</p>
					  </div><!-- end caption -->
					</div><!-- end thumbnail -->
				</div><!-- end col-sm-6 col-md-4 -->
				<div class="col-sm-5 col-md-4">
					<div class="thumbnail">
						{{ HTML::image('assets/images/capacitacion/logo-e-praxis.jpg', '', $attributes = array('class' => 'img-responsive')) }}
					<div class="caption">
						<h4>Cursos Gratuitos, en Línea, Masivos y Abiertos (MOOC) en Ingeniería del Software</h4>
						
						<p class="text-justify">Como aporte al desarrollo de la Ingeniería del Software en Venezuela, y demás países de habla hispana, BIOSOFT ofrece un programa de cursos masivos abiertos y en línea (MOOC - acrónimo en inglés de Massive Open Online Courses), completamente gratuitos. Estos cursos están dirigidos, principalmente, a estudiantes y profesionales que deseen mejorar sus conocimientos en diversas áreas de la Ingeniería del Software.<br><br></p>
						<p class="text-right">
						{{ HTML::link('http://e-praxis.com.ve/', 'más', array('class' => 'btn btn-primary btn-sm','role'=>'button','target'=>'_blank')); }}
						</p>
					  </div><!-- end caption -->
					</div><!-- end thumbnail -->
				</div><!-- end col-sm-6 col-md-4 -->
				<div class="col-sm-5 col-md-4">
					<div class="thumbnail">
						{{ HTML::image('assets/images/capacitacion/logo-incompany.jpg', '', $attributes = array('class' => 'img-responsive')) }}
					<div class="caption">
						<h4>Cursos y Talleres <i>In Company</i><br><br><br></h4>
						
						<p class="text-justify">Para las empresas e instituciones interesadas en capacitar a su personal, bajo la modalidad presencial <i>In Company</i>, BIOSOFT ofrece una amplia variedad de cursos y talleres en las áreas de Ingeniería de Software, Gestión de Procesos de Negocio (BPM), Arquitecturas Empresariales, entre otros. Estos cursos se pueden adaptar a las necesidades y requisitos particulares de su empresa y se dictan de acuerdo a una programación conveniente para ambas partes.</p>
						<p class="text-right">
						{{ HTML::link('Cursos-In-Company', 'más', array('class' => 'btn btn-primary btn-sm','role'=>'button')); }}
						</p>
					  </div><!-- end caption -->
					</div><!-- end thumbnail -->
				</div><!-- end col-sm-6 col-md-4 -->
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
@extends ('layouts.otras')

@section ('title') 
	Consultoria
@stop

@section ('content')
	{{ HTML::image('assets/images/consultoria/cabecera.jpg', 
	$alt="imagen 1", $attributes = array('width' => '100%', 'height' => 236,
	'class' => 'img-responsive')) }}
	<div id="modelado">
		<div class="container">
			<div class="row cuerpo">
				<div class="col-md-7">
					<h2>Modelado y Gestión de Procesos de Negocio <br>
					<span>(BPM – Business Process Management)</span></h2>
					<p class="text-justify">
						BPM es un enfoque de gestión empresarial mediante el cual se modelan, analizan, mejoran y automatizan los procesos de una empresa. 
					</p>
					<p class="text-justify">
						Es usado, en conjunto con los lenguajes UML Business y BPMN, para representar gráficamente diferentes aspectos de una empresa, tales como: objetivos del negocio, procesos del negocio, actividades, recursos, reglas del negocio, actores, estructura organizacional, entre otros. 
					</p>
					<p class="text-justify">
						Usando una plataforma BPM y el lenguaje BPEL, muchos de estos procesos pueden ser automatizados, ejecutados y monitoreados; lo cual reduce significativamente el tiempo de desarrollo de soluciones informáticas. 
					</p>
					<p class="text-justify">
						En BIOSOFT empleamos un método desarrollado por nuestros investigadores denominado BMM (Business Modeling Method) el cual facilita considerablemente el modelado de una empresa, o parte de ella, haciendo uso de UML Business y BPMN. BMM es, actualmente, utilizado en muchas empresas del país, incluyendo PDVSA.
					</p>
					<p class="text-right">
						{{ HTML::link('contacto', 'Solicitar mas información', array('class' => 'btn btn-success btn-sm','role'=>'button')); }}
					</p>
				</div>
				<div class="col-md-5">
					{{ HTML::image('assets/images/consultoria/modelado.png', 
					$alt="imagen 1", $attributes = array('width' => 616, 'height' => 620, 
					'class' => 'img-responsive')) }}
				</div>
			</div>
		</div>
	</div>
	<div id="arquitectura">
		<div class="container">
			<div class="row cuerpo">
				<div class="col-md-7">
					<h2>Arquitectura Orientada a Servicios <br>
					<span>(SOA – Service Oriented Architecture)</span></h2>
					<p class="text-justify">
						La prestación eficaz y eficiente de servicios es uno de sus objetivos más importantes de cualquier empresa. SOA es un enfoque para el desarrollo de soluciones informáticas  basadas en el concepto de servicio. 
					</p>
					<p class="text-justify">
						A través de este enfoque, una empresa puede: establecer una mejor alineación entre los procesos del negocio y  las aplicaciones existentes o futuras; mejorar la interoperabilidad entre sus aplicaciones; desarrollar soluciones en el menor tiempo posible (a través de la reutilización de sus activos de software); y ejercer una mayor gobernabilidad sobre su gestión informática.
					</p>
					<p class="text-justify">
						Nuestra empresa ofrece servicios de capacitación y consultoría en la planificación y gobernabilidad del enfoque SOA, a nivel de la empresa,  y en la especificación, diseño y pruebas de soluciones o aplicaciones basadas en SOA.
					</p>
					<p class="text-right">
						{{ HTML::link('contacto', 'Solicitar mas información', array('class' => 'btn btn-success btn-sm','role'=>'button')); }}
					</p>
				</div>
				<div class="col-md-5">
					{{ HTML::image('assets/images/consultoria/mujer.png', 
						$alt="imagen 1", $attributes = array('width' => 801, 'height' => 607, 
						'class' => 'img-responsive')) }}
				</div>
			</div>
		</div>
	</div>
	<div id="planificacion">
		<div class="container">
			<div class="row cuerpo">
				<div class="col-md-7 der">
					<h2>Planificación de Arquitecturas Empresariales <br> 
					bajo TOGAF 9 y SOA</h2>
					<p class="text-justify">
						Una arquitectura empresarial describe y relaciona los procesos de negocio de una empresa, sus sistemas de información, sus bases de datos y sus tecnologías de información y comunicación (TIC). Alinear estos cuatro elementos es uno de los objetivos estratégicos de mayor importancia que persiguen, hoy en día, la mayoría de empresas modernas. TOGAF es un estándar creado por The Open Group (www.opengroup.org) para modelar y diseñar arquitecturas empresariales. 
					</p>
					<p class="text-justify">
						A través de nuestras adaptaciones hechas al método ADM de TOGAF, En BIOSOFT facilitamos la elaboración de Planes Estratégicos de Arquitectura Empresarial (EAP), que permiten a una empresa implantar, en el mediano o largo plazo, las arquitecturas integradas de procesos del negocio, sistemas de información y plataformas TIC. 
					</p>
					<p class="text-justify">
						En BIOSOFT tenemos amplia experiencia diseñando arquitecturas empresariales y elaborando los planes estratégicos de implantación de estas arquitecturas. En los dos últimos años, en BIOSOFT hemos elaborado los planes estratégicos de arquitecturas empresariales de dos grandes organizaciones públicas: SENIAT y CVG ALUCASA. Un proyecto similar fue elaborado para la Unidad de Producción de la empresa internacional Smurfit Kappa Cartones de Venezuela.
					</p>
					<p class="text-right">
						{{ HTML::link('contacto', 'Solicitar mas información', array('class' => 'btn btn-success btn-sm','role'=>'button')); }}
					</p>
				</div>
				<div class="col-md-5 izq">
					{{ HTML::image('assets/images/consultoria/togaf.jpg', 
					$alt="imagen 1", $attributes = array('width' => 511, 'height' => 372, 
					'class' => 'img-responsive')) }}
				</div>
			</div>
		</div>
	</div>
	<div id="aplicaciones">
		<div class="container">
			<div class="row cuerpo">
				<div class="col-md-7 izq">
					<h2>Desarrollo Agil y Balanceado 
					de Aplicaciones Empresariales</h2>
					<p class="text-justify">Disponer de aplicaciones de calidad, en el menor tiempo posible, es un requisito común en todas las empresas públicas y privadas de un país. Establecer un balance entre los métodos ágiles y disciplinados conduce a un enfoque rápido, ordenado y eficaz del desarrollo de software. Este enfoque garantiza la entrega oportuna y periódica de aplicaciones sin afectar los procesos de mantenimiento.
					</p>
					<p> Los consultores-investigadores asociados a BIOSOFT han desarrollado un método balanceado denominado Blue WATCH que integra las mejores prácticas de los enfoques disciplinados y ágiles. Este método facilita el desarrollo ágil de aplicaciones de una manera disciplinado, sin introducir la "burocracia" que caracteriza a los métodos disciplinados. Puede ser adaptado a las características particulares de una empresa a fin de utilizarlo como un estándar para el desarrollo de software.
					</p>
					<p class="text-right">
						{{ HTML::link('contacto', 'Solicitar mas información', array('class' => 'btn btn-success btn-sm','role'=>'button')); }}
					</p>
				</div>
				<div class="col-md-5 der">
					{{ HTML::image('assets/images/consultoria/desarrollo.png', 
					$alt="imagen 1", $attributes = array('width' => 511, 'height' => 516, 
					'class' => 'img-responsive')) }}
				</div>
			</div>
		</div>
	</div>
@stop
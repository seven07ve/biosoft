@extends ('layouts.master-nuevo')

@section ('title') 
	Bienvenido a Biosoft
@stop

@section ('content')
	<div class="container">
	    <div class="row">
		    <div class="col-md-12">
			    <h2 class="titulo-seccion">Indicadores de calidad</h2>
			    <div class="row text-center">
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/numero.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo-verde">
				            Experiencia
			            </p>
			            <p class="descripcion text-center">
				            Tenemos 10 años de trabajo en el área.
			            </p>
                    </div>
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/icon.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo-verde">
				            Desarrollos
			            </p>
			            <p class="descripcion text-center">
				            Contamos con 17 aplicaciones creadas.
			            </p>
                    </div>
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/idea.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo-verde">
				            Consultoría
			            </p>
			            <p class="descripcion text-center">
				            Hemos realizado 12 cosultorías a empresas.
			            </p>
                    </div>
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/grupo.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo-verde">
				            Personal
			            </p>
			            <p class="descripcion text-center">
				            Somos un equipo de 12 expertos a su dispocición.
			            </p>
                    </div>
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/curso.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo-verde">
				            Cursos
			            </p>
			            <p class="descripcion text-center">
				            Más de 100 cursos impartidos en el país.
			            </p>
                    </div>
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/multitud.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo-verde">
				            Participantes
			            </p>
			            <p class="descripcion text-center">
				            Mas de 1000 participantes certificados.
			            </p>
                    </div>
			    </div>
			</div>
        </div>
        <div class="row">
		    <div class="col-md-12">
			    <h2 class="titulo-seccion">Por qué nosotros</h2>
			    <div class="row text-center">
			        <div class="col-md-4">
			        <div class="porque">
			        	{{ HTML::image('assets/images/inicio/consultoria.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <h3 class="capacitacion">
				            CONSULTORÍA
			            </h3>
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
			            <h3 class="capacitacion">
				            CAPACITACIÓN
			            </h3>
                        <ul class="check-list">
                            <li>Contamos con profesores de 4to y 5to nivel académico</li>
                            <li>Tenemos experiencia de 20 años en formación de profesionales en Ingeniería de Software</li>
                            <li>Orientamos la capacitación a la práctica profesional</li>
                            <li>Capacitamos para que seas competitivo en tecnologías de información</li>
                        </ul>
                        <hr>
                    </div>
                    </div>
			        <div class="col-md-4">
			        <div class="porque">
			        	{{ HTML::image('assets/images/inicio/desarrollo.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <h3 class="capacitacion">
				            DESARROLLO DE SOFTWARE
			            </h3>
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
			    </div>
			</div>
        </div>
    </div>
	<div id="clientes">
		<div class="container">
			<div class="row">
				<h2 class="titulo-seccion">Nuestros <span>Clientes</span></h2>
			</div>
			<div class="row">
				<div class="col-md-12">
                <section class="autoplay ">
                   <hr>
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item"><img src="assets/images/clientes/cencoex.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/bod.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/univ-lisandro.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/enelven.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/ceisoft.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/bcv.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/ula.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/gasprom.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/caf.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/smurfit.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/pdvsa.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/min-ambiente.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/seniat.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/cvg.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/ena-for.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/farmatodo.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/mad-orinoco.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/intt.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/va-isid.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clientes/guardianes.jpg" alt="Owl Image"></div>
                    </div>
                    <hr>
                </section>
				</div>
			</div>
		</div>
	</div>
    <div id="">
        <div class="container">
        <div class="row info">
				<h2 class="titulo-seccion">Algunos de nuestros<span>Trabajos</span></h2>
		</div>
        <div class="row text-center">
			        <div class="col-md-4">
			            <div class="trabajos">
			        	{{ HTML::image('assets/images/inicio/trabajos-capacitacion.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <h3 class="titulo-naranja">
				            CAPACITACIÓN
			            </h3>
                        <p>Portal instruccional desarrollado con el apoyo técnico de Biosoft C.A., el apoyo académico del Grupo GIDyC de la ULA, y el FONACIT.</p>
                        </div>
                    </div>
			        <div class="col-md-4">
			            <div class="trabajos">
			        	{{ HTML::image('assets/images/inicio/trabajos-desarrollo.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <h3 class="titulo-naranja">
				            DESARROLLO DE SOFTWARE
			            </h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-4">
			            <div class="trabajos">
			        	{{ HTML::image('assets/images/inicio/trabajos-consultoria.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <h3 class="titulo-naranja">
				            CONSULTORÍA
			            </h3>
                            <p>Adaptación del marco de trabajo TOGAF® 9.5 y del método ADM a los requisitos del banco. <br>
                            Elaboración de Modelo de Gestión de Procesos de Arquitectura Empresarial del BOD.</p>
                        </div>
                    </div>
			    </div>
	    </div>
    </div>
@stop
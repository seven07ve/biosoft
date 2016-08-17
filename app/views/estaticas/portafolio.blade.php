@extends ('layouts.portfolio')

@section ('title') 
	Portafolio
@stop

@section ('content')
    <div id="">
        <div class="container">
        <div class="row">
				<h2 class="titulo-seccion">Portafolio</h2>
		</div>
        <section class="row">
            <div class="col-md-12">
                   <div class="wrapper" id="contentWrapper"> 
                	<div class="boundingBox" id="content">
                       <hr>
                        <ul id="portfolio-filter">
                            <li><a href="#all" title="">Todos</a></li>
                            <li><a href="#desarrollo" title="" rel="partner">Desarrollo</a></li>
                            <li><a href="#consultoria" title="" rel="partner">Consultoría</a></li>
                            <li><a href="#capacitacion" title="" rel="partner">Capacitación</a></li>
                        </ul>
                        <hr>
                        <ul id="portfolio-list">
                            <!--Eventos-->
                            <li style="display: block;" class="desarrollo search">
                               <?php
                                $titulo = 'Eventos';
                                $img = '<img src="assets/portfolio/imgs/eventos.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Desarrollo de software web para prestar servicios en la nube</strong><br><br>
                                    Eventos, es una aplicación web para prestar servicios en la nube relacionados con la gestión de eventos tales como congresos, talleres, simposios. Permite configurar el evento y generar la lista de invitados basados en los contactos, enviar por correo las invitaciones y permitir la inscripción en línea de los participantes, el pago de la entrada y chequeo de los participantes el día del evento. Lleva las estadísticas de los invitados, inscritos, aprobados, rechazados, pagados y los que efectivamente participaron en el evento.';
                                $data_target = 'eventos';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista); 
                                ?>
                            </li>
                            <!--Mall Rental-->
                            <li style="display: block;" class="desarrollo search">
                               <?php
                                $titulo = 'Mall Rental';
                                $img = '<img src="assets/portfolio/imgs/mallrental.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Desarrollo de software web para prestar servicios en la nube</strong><br><br>
                                    Mall Rental, es una aplicación web para prestar servicios en la nube relacionados con la gestión de alquileres y condominio (consorcios) de locales de los centros comerciales. Maneja los alquileres fijos, variables por ventas netas y por ventas brutas y combinación de fijo mas variable. Facilita la actualización de las ventas de cada tienda, el cálculo de pagos de alquiler y la cobranza automática, permitiéndole a las tiendas el pago en línea o por transferencia. Mantiene un sistema de comunicación entre los propietarios del centro comercial y los arrendatarios  y un sistema de avisos de cobranza, pagos, ventas y contratos.';
                                $data_target = 'mall';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista);
                                ?>
                            </li>
                            <!--SIGETT-->
                            <li style="display: block;" class="desarrollo search">
                               <?php
                                $titulo = 'SIGETT';
                                $img = '<img src="assets/portfolio/imgs/sigtt.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Desarrollo de software web</strong><br><br>
                                    El sistema de gestión de transporte terrestre, permite mantener un registro actualizado de las operadoras de transporte de personas a nivel nacional,  a través del proceso de inscripción y solicitudes de renovación, certificación, fusión, reactivación y cambio de rutas, turnos, cupos, flotas, razón social y prestación de servicios. Así mismo, permite procesar el flujo de trabajo de cada solicitud y emitir los documentos pertinentes. Además cuentas con los componentes para consultas y estadísticas de la prestación de servicio de las operadoras de transporte. ';
                                $data_target = 'sigett';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista);
                                ?>
                            </li>
                            <!--E-PRAXIS-->
                            <li style="display: block;" class="capacitacion search">
                               <?php
                                $titulo = 'e-praxis';
                                $img = '<img src="assets/portfolio/imgs/e-praxis.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Desarrollo de software web</strong><br><br>
                                    Portal instruccional desarrollado con el apoyo técnico de Biosoft C.A., el apoyo académico del Grupo de Investigación en Ingeniería de Datos y Conocimientos (GIDyC) de la Universidad de Los Andes, Mérida Venezuela y el financiamiento de el Fondo Nacional de Ciencia, Tecnologías e Innovación (FONACIT).<br><br>
                                    E-praxis es un recurso tecnológico para la enseñanza y aprendizaje de la Ingeniería del Software. Está orientado a la capacitación de profesionales dedicados a la gestión y desarrollo de sistemas de software (aplicaciones). Apoya, también, la formación de estudiantes de pre y postgrado en las carreras de Informática, Sistemas y Computación.';
                                $data_target = 'e-praxis';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista);
                                ?>
                            </li>
                            <!--SSEP-->
                            <li style="display: block;" class="desarrollo search">
                               <?php
                                $titulo = 'SSEP ';
                                $img = '<img src="assets/portfolio/imgs/ssep.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Desarrollo de software web</strong><br><br>
                                    Sistema de seguimiento y evaluación del programa de manejo sustentable de la cuenca del río Caroní (SSEP), permite apoyar los procesos de gestión de la ejecución de planes, programas y proyectos que se llevan a cabo en la Dirección de Cuencas Hidrográficas del MINEA, a través del manejo de los datos del proyecto y la generación de información oportuna y confiable que facilite la toma de decisiones que la gestión de un proyecto requiere. Además, provee los indicadores de gestión que la evaluación del desempeño o de un proyecto o programa requiere en cada una de sus etapas de ejecución.';
                                $data_target = 'ssep';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista);
                                ?>
                            </li>
                            <!--SIMAPRO-->
                            <li style="display: block;" class="desarrollo search">
                               <?php
                                $titulo = 'SIMAPRO ';
                                $img = '<img src="assets/portfolio/imgs/simapro.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Desarrollo de software web</strong><br><br>
                                    Sistema de Manejo Productivo del Bosque Tropical (SIMAPRO) es una aplicación de software implementada en una plataforma web, bajo la plataforma Ruby on Rails, que permite gestionar la  información proveniente del  inventario forestal de pre y post aprovechamiento y el censo forestal del  bosque tropical.  Incluye el registro de las unidades de manejo y ordenación, mediciones de campo de inventario estático y censo, cálculo de las variables de la masa arbórea y estadísticas a nivel de parcelas de muestreo y del inventario.';
                                $data_target = 'simapro';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista);
                                ?>
                            </li>
                            <!--SIGEFOR-->
                            <li style="display: block;" class="desarrollo search">
                               <?php
                                $titulo = 'SIGEFOR ';
                                $img = '<img src="assets/portfolio/imgs/sigefor.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Desarrollo de software web</strong><br><br>
                                    Sistema de Información de Gestión Forestal (SIGEFOR) es un sistema de información empresarial que soporta los principales procesos del negocio del área forestal de Smurfit Kappa. Cuenta con cinco (5) aplicaciones: Inventario Forestal, Simulación de Producción Forestal, Cosecha Forestal, Recepción del Madera en el Molino y Gestión de Costos y Agotamiento del bosque. Esta implementado en una plataforma web en Visual Studio con C#. Este sistema integra la información proveniente de los inventarios de: sobrevivencia, masa arbórea de precosecha y cosecha, afectación por incendios y ataque de plagas; con la información de cosecha o aprovechamiento forestal y la recepción de la madera en la planta de pulpa. Además, lleva el control de todos los costos diferidos (inversión) a los activos biológicos para conocer el costo unitario de producción del bosque, su valoración y su agotamiento.';
                                $data_target = 'sigefor';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista);
                                ?>
                            </li>
                            <!--SAINFOR-->
                            <li style="display: block;" class="desarrollo search">
                               <?php
                                $titulo = 'SAINFOR ';
                                $img = '<img src="assets/portfolio/imgs/sainfor.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Desarrollo de software web</strong><br><br>
                                    Desarrollo del Sistema de Apoyo al Inventario Forestal (SAINFOR) es una aplicación de software implementada en una plataforma web, bajo la plataforma Ruby on Rails, que permite gestionar la  información proveniente del Establecimiento de Plantaciones y del Inventario Forestal relacionado con la masa arbórea, afectación por incendios y afectación por ataque de plagas. Además, incluye un modelo de simulación de producción forestal que permite proyectar el crecimiento del bosque y realizar un balance a futuro de la disponibilidad de madera tomando en cuenta el aprovechamiento, la tasa de mortalidad y la incorporación de nuevas plantaciones.';
                                $data_target = 'sainfor';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista);
                                ?>
                            </li>
                            <!--CVG ALUCASA-->
                            <li style="display: block;" class="desarrollo search">
                               <?php
                                $titulo = 'CVG ALUCASA ';
                                $img = '<img src="assets/portfolio/imgs/alucasa.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Consultoría. Diseño de la Arquitectura Empresarial de CVG ALUCASA </strong><br><br>
                                    La arquitectura empresarial describe y relaciona los procesos de negocio de CVG ALUCASA: producción de bobinas de aluminio, comercialización, compras, mantenimiento, administración y seguridad; sus sistemas de información, sus bases de datos y sus tecnologías de información y comunicación (TIC), tanto la situación actual como la futura. Así mismo se elaboró el Plan de Migración e Implementación de la Arquitectura Empresarial.';
                                $data_target = 'alucasa';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista);
                                ?>
                            </li>
                            <!--SINACIF-->
                            <li style="display: block;" class="consultoria search">
                               <?php
                                $titulo = 'SINACIF';
                                $img = '<img src="assets/portfolio/imgs/sinacif.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Desarrollo de software web</strong><br><br>
                                    Desarrollo del Sistema de Información Nacional del Inventario Forestal (SINACIF) es una aplicación de software implementada en una plataforma web que permite gestionar la  información proveniente del Inventario Nacional Forestal (INNAFOR) que se realiza en todo el territorio venezolano. Este sistema proporciona información cuantificable de la masa arbórea, información calificable de otras formas de vida del bosque, información derivada en términos de biomasa y stock de carbono, información ecológica, información cartográfica base, de las formaciones vegetales e información temática basada en las características del bosque tales como densidad, altura del dosel, grado de intervención, caducifolía, posición orográfica, paisaje fisiográfico y regímenes de temperatura y humedad del bosque.';
                                $data_target = 'sinacif';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista);
                                ?>
                            </li>
                            <!--SHIMED-->
                            <li style="display: block;" class="consultoria search">
                               <?php
                                $titulo = 'SHiMed';
                                $img = '<img src="assets/portfolio/imgs/shimed.jpg" width="250" height="180" alt="">';
                                $cuerpo = '<strong>Desarrollo de software web</strong><br><br>
                                    El Sistema web de Gestión del Certificado Médico Integral y Certificado Psicológico
para conducir, es parte de un sistema general para la gestión de historias médicas y tiene la finalidad de facilitar y automatizar la gestión de emisión electrónica del certificado médico integral y del certificado psicológico, ambos como requisitos exigidos a los conductores para conducir en el territorio venezolano, de acuerdo a la Ley de Tránsito Terrestre.';
                                $data_target = 'shimed';
                                $lista = array($titulo, $img, $cuerpo, $data_target);
                                echo View::make('parciales.modal')->with('lista', $lista);
                                ?>
                            </li>
                            <li style="overflow: hidden; clear: both; height: 0px; position: relative; float: none; display: block;"></li>
                        </ul>

                    </div>
                    </div>
            </div>
        </section>
	    </div>
    </div>
@stop
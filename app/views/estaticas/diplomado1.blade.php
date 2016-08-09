@extends ('layouts.diplomados')

@section ('title') 
	Diplomado en Análisis de Negocios, Procesos y Requisitos
@stop

@section ('content')
	<div id="diplomado">
		<div class="container">
			<div class="row text-right">
				<h2>En <span>alianza</span> con el Centro de Investigación y Desarrollo <span>VA-ISID</span></h2>
			</div>
			<div class="row">
				<h2>&nbsp;</h2>
			</div>
			<div class="row">
				<a href="" class="descrip-diplo">
					<div class="col-md-4">
						<p class="eslogan">
							Disciplinas y áreas que cubresss.
						</p>
						<p class="text-center">
							Capacítate en las disciplinas de mayor demanda laboral: Análisis de Negocios, Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos.
						</p>
					</div>
				</a>
					<div class="col-md-4">
						<p class="eslogan">
							Orientación a roles y competencias.
						</p>
						<p class="text-center">
							El objetivo de este diplomado es actualizar yo capacitar a quienes ejerzan o deseen ejercer cargos o roles de Analista de Negocios, Analista de Procesos o Ingeniero de Requisitos.
						</p>
					</div>
					<div class="col-md-4">
						<p class="eslogan">
							Estructura y contenidos
						</p>
						<p class="text-center">
							Cubre los modelos de referencia, lenguajes de modelado, métodos, técnicas, mejores prácticas y herramientas de mayor uso y reconocimiento mundial: BPM, BPMN 2, UML 2.5, TOGAF 9.5, BABOK, SWEBOK, SEMAT, SCRUM, Blue WATCH, etc.
						</p>
					</div>

			</div>
			
		</div>
	</div>
	<div class="inscribete">
		{{ HTML::link('#', 'INSCRÍBETE YA!', array('class'=>'', 'role'=>'button'));}}
	</div>
@stop
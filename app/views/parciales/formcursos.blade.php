<div class="container">
	<div class="row title">
		<div class="col-md-12">
		        <a href="../Cursos-In-Company">
                    <div class="atras">{{ HTML::image('assets/images/diplomados/flecha-blanca.png', $alt="Atrás") }}</div>
                </a>
				<br><br>
			<h2 class="titulo-seccion">Solicitud de Informaci&oacute;n</h2>
			<br><br>
		</div>
	</div>
	<div class="row form">
		<div class="col-md-10 col-md-offset-1">
			{{ Form::open(array('url'=>'mandarCorreo',
					'method'=>'POST',
					'class'=>'form-horizontal',
					'role'=>'form',
					'id'=>'form-contact')
				) }}
				@yield('campos')
			<div class="form-group" ssx>
				{{ Form::label('nombre', 'Nombres y Apellidos', array('class'=>'col-md-4 control-label')) }}
				<div class="col-md-8">
					{{ Form::text('nombre',null,array('placeholder' => 'nombres y apellidos', 'class' => 'form-control')) }}
				</div>
			</div>
			<div class="form-group">
				{{ Form::label('empresa', 'Empresa', array('class'=>'col-md-4 control-label')) }}
				<div class="col-md-8">
					{{ Form::text('empresa',null,array('placeholder'=>'nombre de la empresa o instituto', 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group">
				{{ Form::label('correo', 'Correo', array('class'=>'col-md-4 control-label')) }}
				<div class="col-md-8">
					{{Form::email('correo',null,array('placeholder'=>'ejemplo@correo.com', 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group">
				{{ Form::label('asunto', 'Asunto', array('class'=>'col-md-4 control-label')) }}
				<div class="col-md-8">
					{{ Form::text('asunto',null,array('placeholder'=>'Asunto', 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group">
				{{ Form::label('mensaje','Mensaje', array('class'=>'col-md-4 control-label')) }}
				<div class="col-md-8">
					{{ Form::textarea('mensaje',null,array('class'=>'form-control mensaje')) }}
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-4 col-md-8 text-right">
					{{ Form::button('Enviar',array('type'=>'submit','name'=>'submitButton','class'=>'btn enviar')) }}
				</div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
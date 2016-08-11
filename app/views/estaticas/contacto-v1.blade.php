@extends ('layouts.otras')

@section ('title') 
	Contacto
@stop

@section ('content')

	{{ HTML::script('assets/javascripts/bootstrapValidator.min.js')}}
	{{ HTML::script('assets/javascripts/contacto.js')}}
	{{ HTML::image('assets/images/contacto/cabecera.jpg', 
	$alt="imagen 1", $attributes = array('width' => 1600, 'height' => 236, 
	'class' => 'img-responsive')) }}
	<div id="contacto">
		<div class="container">
			<div class="row title">
				<div class="col-md-12">
					<h2>Ubicación de la Empresa</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-4">
					<p>Av. Principal de Los Chorros de Milla, Centro Comercial Empresarial “Villa Los Chorros”, Torre A, Piso 5. Mérida, Venezuela.</p>
				</div>
			</div>
			<div class="row mapa">
				<div class="col-md-12">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.677961719082!2d-71.13842325000002!3d8.626882599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e64812ec9a3d455%3A0xf63a2190ba96737c!2sCentro+Comercial+Villa+Los+Chorros%2C+M%C3%A9rida!5e0!3m2!1ses!2sve!4v1411045449508" width="100%" height="400" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
				{{--<div class="col-md-6 direccion">--}}
					{{--<p>--}}
						{{--Av. Principal de Los Chorros de Milla, Centro Comercial Empresarial “Villa Los Chorros”, Torre A, Piso 5. Mérida, Venezuela.--}}
					{{--</p>--}}
				{{--</div>--}}
			</div>
		</div>
	</div>
	<div id="formulario">
		<div class="container">
			<div class="row title">
				<div class="col-md-12">
					<h2>Formulario de Contacto</h2>
				</div>
			</div>
			<div class="row form">
				<div class="col-md-6">
					{{ $mensaje }}
					{{ Form::open(array('url' => 'enviarCorreo',
										'method' => 'POST',
										'class'=>'form-horizontal',
										'role'=>'form',
										'id'=>'form-contacto'), array('role' => 'form')) }}
						<div class="row">
							<div class="form-group">
								{{ Form::label('nombre', 'Nombre y Apellidos',array('class'=>'col-md-4 control-label')) }}
								<div class="col-md-8">
										{{ Form::text('nombre', null, array('placeholder' => 'ingrese su nombre y apellido completo', 'class' => 'form-control')) }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								{{ Form::label('empresa', 'Empresa',array('class'=>'col-md-4 control-label')) }}
								<div class="col-md-8">
										{{ Form::text('empresa', null, array('placeholder' => 'nombre de la empresa o instituto', 'class' => 'form-control')) }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								{{ Form::label('telefono', 'Telefono',array('class'=>'col-md-4 control-label')) }}
								<div class="col-md-8">
										{{ Form::text('telefono', null, array('placeholder' => '0000-0000000', 'class' => 'form-control')) }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								{{ Form::label('correo', 'Correo Electronico',array('class'=>'col-md-4 control-label')) }}
								<div class="col-md-8">
										{{ Form::text('correo', null, array('placeholder' => 'ejemplo@correo.com', 'class' => 'form-control')) }}
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								{{ Form::label('informacion', 'Información sobre',array('class'=>'col-md-4 control-label')) }}
								<div class="col-md-8">
									{{ Form::text('informacion', null, array('placeholder' => 'asunto a consultar', 'class' => 'form-control')) }}
										{{--{{ Form::select('size', array(--}}
										{{--'scons' => 'Servicio de Consultoria', --}}
										{{--'scap' => 'Servicio de Capacitacón', --}}
										{{--'otro' => 'Otros'),--}}
										{{--null,--}}
										{{--array('class'=>'form-control')) }}--}}
								</div>
							</div>
						</div>
						{{--<div class="row">--}}
							{{--<div class="form-group">--}}
								{{--{{ Form::label('area', 'Area',array('class'=>'col-md-4 control-label')) }}--}}
								{{--<div class="col-md-8">--}}
										{{--{{ Form::select('area', array(--}}
											{{--'a1' => 'Area 1', --}}
											{{--'a2' => 'Area 2',--}}
											{{--'a3' => 'Area 3'),--}}
											{{--null,--}}
											{{--array('class'=>'form-control')) }}--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
						
						<div class="row">
							<div class="form-group">
								{{ Form::label('mensaje', 'Mensaje',array('class'=>'col-md-4 control-label mensaje')) }}
								<div class="col-md-8">
										{{ Form::textarea('mensaje', null, array('placeholder' => 'ingresa tu consulta', 'class' => 'form-control mensaje')) }}
								</div>
							</div>
						</div>
						
						<div class="form-group">
						   <div class="col-sm-12 text-right">
						   	{{ Form::button('Enviar', array('type' => 'submit',
						   									'name' => 'submitButton',
						   									'class' => 'btn btn-primary')) }}
						   </div>
						</div>
					{{ Form::close() }}
				</div>
				<div class="col-md-1 separador">
					<div class="linea"></div>
					
				</div>
				<div class="col-md-5 direccion">
					<div class="row">
						<div class="col-md-3 enlaces">
							<div class="row">
								<a href="#">
								{{ HTML::image('assets/images/contacto/email.png', 
					$alt="imagen 1", $attributes = array('width' => 71, 'height' => 69, 
					'class' => 'img-responsive')) }}
							</a>
							</div>
							<div class="row">
								<a href="contacto">
								{{ HTML::image('assets/images/contacto/face.png', 
					$alt="imagen 1", $attributes = array('width' => 71, 'height' => 63, 
					'class' => 'img-responsive')) }}
							</a>
							</div>
							<div class="row">
								<a href="https://twitter.com/biosoftca" target="_blank">
								{{ HTML::image('assets/images/contacto/twitter.png', 
					$alt="imagen 1", $attributes = array('width' => 71, 'height' => 65, 
					'class' => 'img-responsive')) }}
							</a>
							</div>
							<div class="row">
								<a href="#">
								{{ HTML::image('assets/images/contacto/link.png', 
					$alt="imagen 1", $attributes = array('width' => 71, 'height' => 63, 
					'class' => 'img-responsive')) }}
							</a>
							</div>
							
						</div>
						<div class="col-md-9 telefonos">
							{{ HTML::image('assets/images/contacto/logo-bio.png', 
							$alt="imagen 1", $attributes = array('width' => 195, 'height' => 82, 
							'class' => 'img-responsive')) }}
							<p>Telf: (+58) 274-7892669</p>
							<p>Fax: (+58) 274-2459702</p>
							<p>atencion@biosoftca.com</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	
@stop
@extends ('layouts.otras')

@section ('title') 
	Contacto
@stop

@section ('content')

	{{ HTML::script('assets/javascripts/bootstrapValidator.min.js')}}
	{{ HTML::script('assets/javascripts/contacto.js')}}
	<div id="contacto">
		<div class="container">
			<div class="row">
    			<h2 class="titulo-seccion">Ubicación de la Empresa</h2>
    			<br><br>
    			 <div class="sobre-secc">
				<div class="col-md-5  triangulo">
                            <div style="float:left; width:100%; margin-left:10px;">
                            <h3>SEDE</h3>
                            <hr>
                            <br>
                            <p style="line-height:30px;">Av. Principal de Los Chorros de Milla, <br> <strong>Centro Comercial Empresarial “Villa Los Chorros”</strong>, <br>
                            Torre A, Piso 2. <br>
                            Mérida, Venezuela.<br>
                            </p>
                            <p>Telf: (+58) 274-7892669</p>
							<p>Fax: (+58) 274-2459702</p>
							<p>atencion@biosoftca.com</p>
                            <hr>
                            <br></div>
                                <br clear="all">
				</div>
				<div class="col-md-7  izq oscuro">
				<google-map latitude="8.625" longitude="-71.138" zoom=15 api-key="AIzaSyCqm4_CZCe927nQpljg6PsFpqlhcf_TNvs">
				    <google-map-marker latitude="8.626796" longitude="-71.138473" title="Biosoft C.A.">
				        {{ HTML::image('assets/images/layout/logo_headernew.png',
                  $alt="Biosof c.a", $attributes = array('width' => 162, 'height' => 61,
                    'class' => 'img-responsive')) }}
                    {{ HTML::image('assets/images/contacto/img-google-map.jpg',
                  $alt="Biosof c.a", $attributes = array('width' => 200, 'height' => 112,
                    'style' => 'float:right;')) }}
				        <p>BioSoft es Ingeniería de Software y Gestión Informática  a su medida. Prestamos servicios de Desarrollo, Capacitación y Consultoría generándole valor a su empresa. </p>
				    </google-map-marker>
				</google-map>
				</div>
                </div>
			</div>
		</div>
	</div>
	<div id="formulario">
		<div class="container">
		<br><br>
		<h2 class="titulo-seccion">Formulario de Contacto</h2>
		<br><br>
			<div class="row title">
				<div class="col-md-12">
				</div>
			</div>
			<div class="row form">
				<div class="col-sm-9 col-sm-offset-1 col-md-9 col-md-offset-1 col-lg-offset-1 col-lg-9">
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
			</div>
		</div>
	</div>

	
@stop
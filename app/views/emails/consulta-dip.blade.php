<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<div style="width:90%; height:auto; background-color:rgba(231,227,227,1.00); padding:5%;">
    		<div style="font-family:'Open Sans', Arial; font-size:24px; font-weight:bold; color:rgba(109,141,40,1.00); width:100%; height:100px;">
    			<img src="http://www.biosoftca.com/web/assets/images/layout/logo_header.png" style="float:left; width: 30%;">
    			<div style="float:left; width:60%; padding:2% 5%; text-align:center;">Diplomados y Cursos Certificados. Solicitud de Información</div>
    		</div><br clear="all">
		<div style="width:100%; height:auto; border:dashed 1px #6C6C6C; padding:1% 2%;">
    			<p>Hay una solicitud de información desde el <strong>{{ $curso }}</strong></p>
    			<p>de parte de: {{ $nombre }}</p>
			<p>Empresa: {{ $empresa }}</p>
			<p>Correo Electronico: {{ $correo }}</p>
			<p>Asunto: {{$asunto}}</p>
			<p>Mensaje: {{ $mensaje }}</p>
    		</div>
    	</div>
</body>
</html>
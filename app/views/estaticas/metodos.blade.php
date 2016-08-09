@extends ('layouts.otras')

@section ('title') 
	Métodos

@stop
@section ('content')
	<div class="metodo">
		<div class="container">	
        <div class="row">
           <h2 class="titulo-seccion">El Marco de Trabajo Metodológico WATCH</h2>
           <hr>
           <div class="sobre-secc">
            <div class="col-xs-12 col-md-7 sobre-img der claro">
                    {{ HTML::image('assets/images/metodologia/metodologias.jpg', $alt="imagen 1", $attributes = array('width' => "100%",  'class' => 'img-responsive')) }}
            </div>
            <div class="col-md-5 text-justify triangulo-izq">
                <div class="cont-texto">
                    <p>WATCH es un marco metodológico para proyectos de desarrollo de software que describe los procesos técnicos, gerenciales y de soporte, las técnicas, los estándares, las prácticas y las herramientas que deben emplear los equipos de trabajo para el desarrollo de productos de software de alta calidad. En la actualidad, uno de los principales problemas a los que se enfrentan los desarrolladores de software y en especial, los líderes de proyectos, es en la adaptación de un método de desarrollo de software que sea utilizado para un proyecto con características particulares y dentro un dominio de aplicación específico. Para solventar parte de estos problemas, el marco metodológico WATCH ha sido utilizado como una guía o patrón para la elaboración de una serie de métodos de desarrollo de software, los cuales conforman la suite de métodos WATCH.</p>
                </div>
            </div>
            <br clear="all"></div>
            <hr>
        </div>
        <div class="row">
           <h2 class="titulo-seccion">Método Gray Watch</h2>
           <div class="sobre-secc">
            <div class="col-md-7 text-justify triangulo">
                <div class="cont-texto">
                    <strong>Definición del método:</strong>
                    <ul>
                        <li>Gray WATCH es un marco metodológico para el desarrollo de aplicaciones empresariales de alta complejidad y/o tamaño.</li>
                        <li>Representa la versión más completa, detallada y pesada de los métodos que conforman la suite WATCH.</li>
                    </ul>
                    <strong>A quién está dirigido:</strong>
                    <ul>
                        <li>Está dirigido a proyectos de desarrollo de software que producen aplicaciones empresariales basadas en componentes.</li>
                        <li>Pueden participar de 5 a 20 desarrolladores o más, los cuales podrían ser organizados en diversos grupos de trabajo de acuerdo a la complejidad del proyecto.</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 sobre-img izq oscuro">
                    {{ HTML::image('assets/images/metodologia/gray-watch.jpg', $alt="imagen 1", $attributes = array('width' => "100%",  'class' => 'img-responsive')) }}
            </div>
            <br clear="all"></div>
        </div>
        <div class="row">
           <h2 class="titulo-seccion">Método Blue WATCH</h2>
           <hr>
           <div class="sobre-secc">
            <div class="col-xs-12 col-md-5 sobre-img der oscuro">
                    {{ HTML::image('assets/images/metodologia/blue-watch.jpg', $alt="imagen 1", $attributes = array('width' => "100%",  'class' => 'img-responsive')) }}
            </div>
            <div class="col-md-7 text-justify triangulo-izq">
                <div class="cont-texto">
                    <strong>Definición del método:</strong>
                    <ul>
                        <li>Blue WATCH es un marco metodológico para el desarrollo de aplicaciones empresariales de mediana o pequeña complejidad y tamaño.</li>
                        <li>Representa la versión balanceada de los métodos que conforman la suite WATCH, donde se combina lo mejor de las prácticas ágiles y disciplinadas.</li>
                        <li>Este marco de trabajo es iterativo, extensible, adaptable, reutilizable, completo y balanceado.</li>
                    </ul>
                    <strong>A quién está dirigido:</strong>
                    <ul>
                        <li>Blue WATCH fue concebido expresamente para ser utilizado en pequeñas y medianas empresas de desarrollo de software, donde participan pequeños grupos de desarrollo de software de 2 – 10 desarrolladores.</li>
                    </ul>
                </div>
            </div>
            <br clear="all"></div>
            <hr>
        </div>
        <div class="row">
           <h2 class="titulo-seccion">Método White Watch</h2>
           <div class="sobre-secc">
            <div class="col-md-7 text-justify triangulo">
                <div class="cont-texto">
                    <p>El método <strong>White_Watch</strong> es la versión liviana del método Watch. W_Wacth es un marco metodológico que describe, el conjunto estructurado de actividades necesarias para desarrollar un producto de software pequeño, de baja complejidad y con documentación técnica precisa. En esta versión se trata de disminuir la elaboración detallada de documentos y/o especificaciones de apoyo parcial al proceso de desarrollo, permitiendo, al equipo de desarrollo pequeño (1 o 2 personas), dedicar más tiempo a las actividades de implementación e implantación de versiones operativas y evolutivas del producto. El rol de líder de proyecto es ejecutado en paralelo, y sin sobrecarga, por uno de los miembros del equipo mientras éste ejecuta otros roles técnicos. Es por ello que, las actividades gerenciales de control de calidad y de configuración, las cuales son indispensables en todo proyecto de software, se limitan a prescribir las actividades básicas de control de cambios, de validación y de verificación de especificaciones técnicas y de productos parciales y finales. 
</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 sobre-img izq oscuro">
                    {{ HTML::image('assets/images/metodologia/white-watch.jpg', $alt="imagen 1", $attributes = array('width' => "100%",  'class' => 'img-responsive')) }}
            </div>
            <br clear="all"></div>
        </div>
		</div>
		<br clear="all">
	</div>
@stop 	
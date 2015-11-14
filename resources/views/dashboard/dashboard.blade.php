@extends("master")

@section('title')

	@lang('messages.dashboard')

@endsection

@section('sidebar')

	@include('includes/sidebar')

@endsection

@section('content')

    @if (Session::has('success_register'))
        <div class="alert alert-success">{!! Session::get('success_register') !!}</div>
    @endif

    <div id="explicacion">
<p>Este es el tablero, o
<span class="title_table">dashboard</span>, donde se controlan todas la <span class="title_table">Queries</span> de la aplicación.
Pero antes de entrar en detalle me gustaría contarte algunas cosas.</p>
<p>
Para la construcción de este website se ha utilizado el framework <span class="title_table">Laravel-5.1</span><br></p>

<p>
	<center class="php-artisan">
		<button class="btn btn-primary btn-razones">
			Razones para su utilización: (desplegable)<span class="glyphicon glyphicon-arrow-down"> </span>
		</button>
	</center>
<p>

 <div class="razones">
 	<center class="php-artisan"><button class="btn btn-primary ">Razones para su utilización: </button></center>
	<ul>
		<li>Reducción de costos y tiempos en el desarrollo y mantenimiento.</li>
		<li>Flexible y adaptable no solo al <span class="metodos">MVC</span> Tradicional (Modelo vista controlador) sino que para reducir código propone usar <span class="php-artisan">“Routes with clousures”</span>. </li>
		<li>Buena y abundante documentación sobre todo en el sitio oficial. </li>
		<li>Posee una amplia comunidad y foros. </li>
		<li>Es modular y con una amplio sistemas de <span class="metodos">paquetes</span> y <span class="metodos">drivers</span> con el que se puede extender la funcionalidad de forma fácil, robusta y segura. </li>
		<li>Hace que el manejo de los datos en <span class="title_table">Laravel</span> no sea complejo; mediante <span class="metodos">Eloquent</span> (que es un <span class="metodos">ORM</span> basado en el patrón active record) la interacción con las bases de datos es totalmente orientada a objetos, siendo compatible con la gran mayoría de las bases de datos del mercado actual y facilitando la migración de nuestros datos de una forma fácil y segura. Otro punto es que permite la creación de <span class="metodos">consultas robustas</span> y <span class="metodos">complejas</span>. </li>
		<li>Facilita el manejo de ruteo de nuestra aplicación como así también la generación de <span class="metodos">url amigables</span> y control de enlaces auto–actualizables lo que hace mas fácil el mantenimiento de un sitio web. </li>
		<li>El sistema de plantillas <span class="metodos">Blade</span> de <span class="title_table">Laravel</span>, trae consigo la generación de mejoras en la parte de presentación de la aplicación como la generación de plantillas más simples y limpias en el código y además incluye un sistema de cache que las hace más rápidas, lo que mejora el rendimiento de la aplicación. </li>
		<li>También cuenta con una herramienta de interfaces de líneas de comando llamada <span class="php-artisan">Artisan</span> que me permite programar tareas programadas como por ejemplo ejecutar migraciones, pruebas programadas, etc. </li>

	</ul>
</div>
<p>
	<center class="php-artisan">
		<button class="btn btn-danger btn-razones-hide">
			Ocultar razones: <span class="glyphicon glyphicon-arrow-up"> </span>
		</button>
	</center>
</p>

<p>
<center class="php-artisan">
	<button class="btn btn-success btn-desarrollo">
		Desarrollo de la aplicación: (desplegable) <span class="glyphicon glyphicon-arrow-down"> </span>
	</button>
</center>
</p>
	<div  class="desarrollo">
	<center class="php-artisan"><button class="btn btn-success ">Desarrollo de la aplicación: </button></center>
	<ol>
		<li>
			Creación de un virtual host. <br>
			Url de entrada: <span class="title_table">inpqprueba.app</span>
		</li>
		<li>
			Creación de una base de datos: nombre <span class="title_table">INPQprueba.</span>
		</li>
		<li>
			Creación de las diferentes tablas por medio de las migraciones de <span class="title_table">Laravel</span> por medio de la consola con el comando:<br>
			<center class="php-artisan"> php artisan make: migration (..nombre_tabla)
			<span class="glyphicon glyphicon-arrow-down down-tables"> </span> "mostrar tablas"</center>  <br>

			<ul class="tables-db">
				<li>users</li>
				<li>familys</li>
				<li>sub_familys</li>
				<li>marks</li>
				<li>products</li>
				<li>vendedores</li>
				<li>pedidos</li>
				<li>clients</li>
				<li>data_clients</li>
				<li>data_client_contacts</li>
				<li>data_clients_homes</li>
				<li>data_client_sales</li>
				<li>data_client_carteras</li>
			</ul>
			<span class="glyphicon glyphicon-arrow-up up-tables"> </span>
		</li>
		<li>
			Creación de los <span class="metodos">Seeders</span> asociados a las tablas por medio del comando:<br>
			<center class="php-artisan">php artisan make:seeder (...nombre_tabla).</center>
		</li>

		<li>
			Llenado de datos de las tablas por medio de los <span class="metodos">Seeders</span> de <span class="title_table">Laravel</span> empleando datos ficticios. En este caso se ha utilizado la clase <span class="metodos">$faker</span> con el modelo <span class="metodos">Factory::</span>
		</li>

		<li>
			Creación de los distintos <span class="metodos">Modelos</span> en función de sus respectivas tablas a través del comando:<br>
			<center class="php-artisan"> php artisan make:model (..nombre_modelo)</center>
		</li>
		<li>
			Confección de los <span class="metodos">Modelos</span> relacionando tablas entre sí: <span class="glyphicon glyphicon-arrow-down relaciones-down"> </span>"mostrar relaciones"<br>

			<ul class="relaciones">
				<li>"hasOne"</li>
				<li>"belongsTo"</li>
				<li>"hasMany"</li>
				<li>etc </li>
			</ul>
			<span class="glyphicon glyphicon-arrow-up relaciones-up"></span>

		</li>

		<li>
			Creación de los distintos <span class="metodos">Controladores</span> asociados a sus respectivos <span class="metodos">Modelos</span> por medio del comando:<br>
			<center class="php-artisan">php artisan make:controller (..nombre_controladorController)</center>
		</li>

		<li>
			Creación de las <span class="metodos">Rutas</span>, asociando rutas a un <span class="metodos">Controlador</span> y sus <span class="metodos">métodos</span>.
		</li>

		<li>
			Restricción de las rutas por medio de <span class="metodos">Middlewares</span> al área privada. El usuario habrá de estar logueado
		</li>

		<li>
			Creación de los <span class="metodos">Métodos</span> de los <span class="metodos">Controladores</span> donde se manejan las <span class="metodos">Queries</span> de la aplicación.
		</li>

		<li>
			Creación de las <span class="metodos">Vistas</span> asociadas a los <span class="metodos">métodos</span> delos <span class="metodos">Controladores</span>.
		</li>
	</ol>
</div>
<p>
	<center class="php-artisan">
		<button class="btn btn-danger btn-desarrollo-hide">
			Ocultar desarrollo: <span class="glyphicon glyphicon-arrow-up"> </span>
		</button>
	</center>
</p>


<p>
	<center class="php-artisan">
		<button class="btn btn-info btn-otras-down">
			Otras cuestiones: (desplegable)<span class="glyphicon glyphicon-arrow-down"> </span>
		</button>
	</center>
</p>

	<div class="otras-cuestiones">

		<center class="php-artisan">
			<button class="btn btn-info ">
				Otras cuestiones:
			</button>
		</center>
		<ul>
			<li>
				A parte de ello se ha utilizado <span class="title_table">Bootstap3</span>, como framework de desarrollo responsable, apto para móviles y otros dispositivos de distintos tamaños.
			</li>

			<li>
				También se ha utilizado el framework de javascript <span class="title_table">JQuery</span>, del lado del cliente.
			</li>

			<li>
				El archivo <span class="metodos">style.css</span> que maneja las <span class="title_table">CSS</span> y se encuentra dentro de la carpeta css que a su vez se encuentra dentro de la carpeta public.
			</li>
			<li>
				Y para terminar también existe la posibilidad de mostrar los contenidos en distintos <span class="title_table">idiomas</span>. En este ejemplo se ha utilizado el <span class="metodos">castellano</span> y el <span class="metodos">inglés</span>. Este último en fase de desarrollo.
			</li>
		</ul>
		<p>
			<center class="php-artisan">
				<button class="btn btn-danger btn-otras-hide">
					Ocultar otras cuestiones: <span class="glyphicon glyphicon-arrow-up"> </span>
				</button>
			</center>
		</p>

	</div>


	<p>Espero que os guste y sea de vuestro agrado. A vuestra disposición, un cordial saludo.</p><br>
	{{ Html::image('img/berenes.png') }}, Desarrollador Web.

</div>

<script>

 $(function() {
 		$(".razones, .desarrollo, .btn-razones-hide, .btn-desarrollo-hide, .tables-db, .up-tables, .relaciones, .relaciones-up, .otras-cuestiones, .btn-otras-hide").hide();


         $(".btn-razones").click(function(){
         	$(".btn-razones").hide();
         	$(".btn-razones-hide").show();
         	$(".razones").show();
         }); // end click

         $(".btn-desarrollo").click(function(){
         	$(".btn-desarrollo").hide();
         	$(".btn-desarrollo-hide").show();
         	$(".desarrollo").show();
        });

         $(".down-tables").click(function(){
         	$(".down-tables").hide();
         	$(".up-tables").show();
         	$(".tables-db").show();
        }); // end click

         $(".relaciones-down").click(function(){
         	$(".relaciones-down").hide();
         	$(".relaciones").show();
         	$(".relaciones-up").show();
        }); // end click

         $(".btn-otras-down").click(function(){
         	$(".btn-otras-down").hide();
         	$(".otras-cuestiones").show();
         	$(".btn-otras-hide").show();
        }); // end click

         $(".btn-razones-hide").click(function(){
         	$(".btn-razones").show();
         	$(".btn-razones-hide").hide();
         	$(".razones").hide();
        }); // end click

         $(".btn-desarrollo-hide").click(function(){
         	$(".btn-desarrollo").show();
         	$(".btn-desarrollo-hide").hide();
         	$(".desarrollo").hide();
        }); // end click

         $(".up-tables").click(function(){
         	$(".down-tables").show();
         	$(".up-tables").hide();
         	$(".tables-db").hide();
        }); // end click

         $(".relaciones-up").click(function(){
         	$(".relaciones-down").show();
         	$(".relaciones").hide();
         	$(".relaciones-up").hide();
        }); // end click

         $(".btn-otras-hide").click(function(){
         	$(".otras-cuestiones").hide();
         	$(".btn-otras-hide").hide();
         	$(".btn-otras-down").show();
        }); // end click
    }); //

</script>

@endsection

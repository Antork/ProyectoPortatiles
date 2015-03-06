<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title>Título de la página</title>

	<!--  link rel="stylesheet" href="css/estilos.css" type="text/css">   -->
	<link rel="stylesheet" href="css/base.css" type="text/css"> 
	<link rel="stylesheet" href="css/great.css" type="text/css" media="screen and (min-width: 981px)">
	<link rel="stylesheet" href="css/medium.css" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)"> 
	<link rel="stylesheet" href="css/mini.css" type="text/css" media="screen and (max-width: 480px)"> 
	
	<style type="text/css">
	</style>
</head>
<body id="bini">
	<div id="principal">
		
		
		<header>
			<div id="cabecera">
				<div id="logo">
					<p>Portátiles para Gamers</p>

					<div id="usuario">

						<form id="login">

							<label for="user_log">Usuario</label>
							<input id="user_log" class="form_log" type="email" name="usuario" placeholder="algo@ejemplo.com" 	maxlength="25" size="25" required>
							<label for="clave_log">Contraseña</label>
							<input id="clave_log" class="form_log" type="password" name="clave" minlength="6" maxlength="10" size="25" required>	
							<input class="botones_log" type="submit" name="enviar" value="Entrar">
							<a class="reg_1" href="registro.php">Registrarse</a>	
						</form>
						<br>
						<br>
					</div>
			 	</div>
			</div>
		</header>
		
		
		

		<div class="clear"></div>
		
		<nav id="menubar">
			<ul>
				<li class="nivel1"><a class="nivel1 selected1" href="#">Inicio</a>
					<ul>
						<li><a href="#">Opcion1.1</a></li>
						<li><a href="#">Opcion1.2</a></li>
					</ul>
				</li>
				<li class="nivel1"><a class="nivel1 selected2" href="portatiles.php">Portátiles</a>
					<ul>
						<li><a href="#">Opcion2.1</a></li>
						<li><a href="#">Opcion2.2</a></li>
					</ul>
				</li>
				<li class="nivel1"><a class="nivel1 selected3" href="#">Noticias</a>
					<ul>
						<li><a href="#">Opcion3.1</a></li>
						<li><a href="#">Opcion3.2</a></li>
					</ul>
				</li>
				<li class="nivel1"><a class="nivel1 selected4" href="#">Reviews</a>
					<ul>
						<li><a href="#">Opcion4.1</a></li>
						<li><a href="#">Opcion4.2</a></li>
					</ul>
				</li>	
				<li class="nivel1"><a class="nivel1 selected5" href="#">Usuarios</a>
					<ul>
						<li><a href="#">Opcion5.1</a></li>
						<li><a href="#">Opcion5.2</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		

		<div id="cont1">

		</div>
		<div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
		</div>
		<div id="cont2">
			<div class="noticias">
				<div class="fecha">
					<p>19 Enero</p>
					<p>2015</p>
				</div>
				<div>
					<h2>Esto sería el titular de la noticia</h2>
					<div id="texto_not1" class="texto_not">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut elit sed enim ultricies congue sed ut enim. Donec vulputate nulla et dignissim tristique. Nam placerat sapien quis molestie dignissim. Phasellus quam purus, lacinia id dui ut, vestibulum sollicitudin lorem.
						</p><br>
						<a href="#">Leer mas..</a>	
					</div>	
					

				</div>

			</div>

			<div class="reviews">
				<div class="fecha">
					<p>19 Enero</p>
					<p>2015</p>
				</div>
				<div >
					<h2>Esto sería el titular de la review</h2>
					<div id="texto_not2" class="texto_not">
						<p>Donec rutrum vel ligula vestibulum sagittis. Ut efficitur egestas nunc, sed efficitur odio facilisis ut. Duis non lacus in ipsum malesuada sollicitudin vel eget risus. Sed ac sapien justo. Maecenas massa velit, convallis porta tincidunt sit amet, auctor a risus. Aliquam vestibulum risus sit amet auctor interdum. Cras dapibus mi a nisl ornare consectetur. Nam sagittis diam sed risus rutrum tristique. Donec est odio, sollicitudin non massa at, ullamcorper auctor nibh.</p><br>	
						<a href="#">Leer mas..</a>	
					</div>
				</div>
			</div>

		</div> <!-- cont2 -->
		<div id="pie">
			<div></div>

		</div>
		

	</div> <!-- principal -->

</body>
</html>
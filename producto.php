<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Título de la página</title>

	<!--  link rel="stylesheet" href="css/estilos.css" type="text/css">   -->
	<link rel="stylesheet" href="css/base.css" type="text/css"> 
	<link rel="stylesheet" href="css/great.css" type="text/css" media="screen and (min-width: 981px)">
	<link rel="stylesheet" href="css/medium.css" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)"> 
	<link rel="stylesheet" href="css/mini.css" type="text/css" media="screen and (max-width: 480px)"> 
        <!--
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
        <script src="jquery-1.11.2/jquery-1.11.2.js"></script>
        <script src="jquery-ui-1.11.3/jquery-ui.min.js"></script>
        -->
	
	<style type="text/css">
        
         
	</style>
        
        <script>
        
        function validarUser() {
            alert("prueba");
            var prueba = -1;
            if (prueba == -1) {
                $("#dialogo").dialog({ autoOpen: false,
                    modal: true
            } );
            $("#dialogo").dialog( "open" );
            }
        }
        
        </script>
        
</head>
<body>
	<div id="principal_pro">
            <div id="modal1" class="modalmask">
                <div class="modalbox movedown">
                <a href="#close" title="Close" class="close">X</a>
                <h2>DESLIZAR</h2>
                <p>La ventana modal aparece por arriba y se desliza hasta su posición. Un efecto simple pero elegante.</p>
                <p>Aquí puedes incluir cualquier cosa como vídeos, mapas, formularios...</p>
            </div>
            </div>
		<header>
			<div id="cabecera">
				<div id="logo">
					<p>Portátiles para Gamers</p>

					<div id="usuario">

						<form id="login">

							<label for="user_log">Usuario</label>
							<input id="user_log" class="form_log" type="email" name="usuario" placeholder="algo@ejemplo.com" 	maxlength="25" size="25" required>
							<label for="clave_log">Contraseña</label>
							<input id="clave_log" class="form_log" type="password" name="clave" maxlength="10" size="25" required>	
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
                            <li class="nivel1"><a class="nivel1 selected1" href="index.php">Inicio</a>
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


		<div id="cont_pro">

			<div id="producto">
				<div id="img_prod" class="flotar_izq">
					<img src="images/portatiles/GP60_2PE_LEOPARD_400x320.png">
				</div>

				<div id="spec_prod" class="flotar_izq">
					<h2>GP60 2PE LEOPARD</h2>
					<ul>
						<li style="list-style-type: disc">Windows 8.1</li>
						<li style="list-style-type: disc">Procesador Intel® Core™ i5/i7 de la 4º generación</li>
						<li style="list-style-type: disc">NVIDIA GeForce 840M 2GB VRAM DDR3</li>
						<li style="list-style-type: disc">15.6" HD (1366x768) /FHD(1920x1080) Anti-reflejo</li>
						<li style="list-style-type: disc">Disco duro de estado sólido híbrido (SSD+HDD)</li>
						<li style="list-style-type: disc">Exclusiva tecnología Cooler Boost</li>
						<li style="list-style-type: disc">Tecnología Matrix display que proporciona una mejor experiencia visual para el gaming extremo.</li>
						<li style="list-style-type: disc">Teclado SteelSeries hecho para gamers</li>
						<li style="list-style-type: disc">Diseño exclusivo Audio Boost que proporciona un sonido cristalino y claro.</li>
						<li style="list-style-type: disc">Audio de máxima calidad con Sound Blaster Cinema</li>
						<li style="list-style-type: disc">Tarjeta de red con procesador integrado Killer™ E2200 para una experiencia online más rápida y con mejor tiempo de respuesta.</li>
						<li style="list-style-type: disc">Mas información:&nbsp;<span><a href="http://es.msi.com/product/nb/GP60_2PE_Leopard.html#hero-overview" target="_blank"><strong>Página oficial del producto</strong></a><span></li>
					</ul>

				</div> <!-- spec_prod -->

			</div> <!-- producto -->
			<div class="clear"></div>
			<div id="enlaces_rev">
				<h1>Reviews</h1>
				<ul>
					<li class="nivel1_rev">
						<ul class="lista_enlaces_rev">
							<li class="fec_rev">
								<div class="fecha_review">
									<p>19 Enero</p>
									<p>2015</p>
								</div>								
							</li>
							<li class="nivel2_rev"><a href="http://elchapuzasinformatico.com/2014/07/review-msi-gp60-2pe-leopard/" target="_blank">El chapuzas informatico</a></li>
						</ul>
					</li>
					<li class="nivel1_rev">
						<ul class="lista_enlaces_rev">
							<li class="fec_rev">
								<div class="fecha_review">
									<p>19 Enero</p>
									<p>2015</p>
								</div>								
							</li>
							<li class="nivel2_rev"><a href="https://www.youtube.com/watch?v=Gpl7jVwXzW0" target="_blank">Youtube MSI GP60 2PE Leopard 15.6" Gaming Laptop Review</a></li>
						</ul>
					<li>

					<li class="nivel1_rev">
						<ul class="lista_enlaces_rev">
							<li class="fec_rev">
								<div class="fecha_review">
									<p>19 Enero</p>
									<p>2015</p>
								</div>								
							</li>
							<li class="nivel2_rev"><a href="http://hardzone.es/2014/08/12/msi-gp60-2pe-leopard-analisis-completo-y-comparativa/" target="_blank">Hardzone</a></li>
						</ul>
					<li>	

				</ul>	
			</div>	<!-- enlaces_rev -->
			<div class="clear"></div>
			<div id="enlaces">
				<h1>Donde comprar (precios actualizados a 27/01/2015</h1>
				<ul>
					<li class="nivel1_prod">
						<ul class="lista_enlaces">
                                                    <li class="logo_prod nivel2_prod"><img alt="" src="images/vendedores/amazon_logo_210x76.png"></li>
							<li class="precio_prod nivel2_prod">Desde 718,76 €</li>
							<li class="link_enlace nivel2_prod"><a class="link_vendedor_prod" href="http://www.amazon.es/dp/B00NHIB3T4/ref=asc_df_B00NHIB3T423896877?smid=A1AT7YVPFBWXBL&tag=iceleads03-21&linkCode=df0&creative=24634&creativeASIN=B00NHIB3T4&ascsubtag=sKey:14222611924569ip0:aSess:52348" target="_blank">Comprar</a></li>
						</ul>
					</li>
					<li class="nivel1_prod">
						<ul class="lista_enlaces">
                                                    <li class="logo_prod nivel2_prod"><img alt="" src="images/vendedores/4frags_logo_210x78.jpg"></li>
							<li class="precio_prod nivel2_prod">Desde 670'63 €</li>
							<li class="link_enlace nivel2_prod"><a class="link_vendedor_prod" href="http://www.4frags.com/msi-gaming-gp60-2pe-leopard-421xes.html?gclid=CNP0z46fscMCFanMtAod-UcAOg" target="_blank">Comprar</a></li>
						</ul>
					<li>
				</ul>	
			</div>

			<div class="clear"></div>
			<div><p><br><br></p></div>
			
			<div id="comentarios">
                                
                                <div>
                                    <input type="button" value="Escribir comentarios" id="btn_coment" onclick="validarUser()" >
                                    <a href="#modal1"  >Escribir comentario</a>
				</div>
				
				<h1>Aqui irian los comentarios/opiniones de los usuarios</h1>
                                
				
				
			</div> <!-- comentarios -->




		</div> <!-- cont_pro -->




	</div> <!-- Principal -->
</body>
</html>
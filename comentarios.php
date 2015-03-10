<?php


$validado=false;
$strfecha="";



if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $procesador=$_POST["procesador"];
    $ram =$_POST["ram"];
    $hdd =$_POST["hdd"];
    $grafica =$_POST["grafica"];
    $comentario=$_POST["comentario"];
    $fecha=new DateTime();
    $strfecha=$fecha->format('d/m/Y');
    //$fecha=new DateTime();
    
    if (trim($procesador) == "") {
        $validado=false;
    } elseif (trim($ram) ==""){
        $validado = false;
    } elseif (trim($hdd) == "") {
        $validado=false;
    } elseif (trim($grafica)) {
        $validado=false;
    } else {
        $validado=true;
    }
    if ($validado){
        //Insertar datos en la BBDD
    }
   
}
    

?>


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

        <script type="text/javascript">
            
            function validarCom(oform){

                var validado = true;
                
                
		if (oform.com_procesador.value.trim() == "") {
                        
                    alert(oform.com_procesador.value);    
                    document.getElementById('errcom_procesador').className="enbloque error_reg";
                    document.getElementById('errcom_procesador').innerHTML="Debes seleccionar un modelo de procesador.";
                    oform.com_procesador.className="form_com error_reg_cajatexto";
                    validado = false;
			
		}else {

                    document.getElementById('errcom_procesador').className="enbloque";
                    document.getElementById('errcom_procesador').innerHTML="";
                    oform.com_procesador.className="form_com";

		}

	
		if (oform.com_ram.value.trim() == "") {

			document.getElementById('errcom_ram').className="enbloque error_reg";
			document.getElementById('errcom_ram').innerHTML="Debe seleccionar la cantidad de memoria.";
			oform.com_ram.className="form_com error_reg_cajatexto";
			validado = false;
			
		}else {

			document.getElementById('errapellido').className="enbloque";
			document.getElementById('errapellido').innerHTML="";
			oform.com_ram.className="form_com";

		}


		if (oform.com_hdd.value.trim() == "") {

                    document.getElementById('errcom_hdd').className="enbloque error_reg";
                    document.getElementById('errcom_hdd').innerHTML="Debes indicar que tipo de HDD o SSD tienes.";
                    oform.com_hdd.className="form_com error_reg_cajatexto";
                    validado = false;
			
		}else {

                    document.getElementById('errcom_hdd').className="enbloque";
                    document.getElementById('errcom_hdd').innerHTML="";
                    oform.com_hdd.className="form_com";
                    
                }
                
                if (oform.com_grafica.value.trim() == ""){
                    
                    document.getElementById('errcom_grafica').className="enbloque error_reg";
                    document.getElementById('errcom_grafica').innerHTML="Debes seleccionar un modelo de tarjeta grafica.";
                    oform.com_grafica.className="form_com error_reg_cajatexto";
                    validado = false;
                                        
                } else{
                    
                    document.getElementById('errcom_grafica').className="enbloque";
                    document.getElementById('errcom_grafica').innerHTML="";
                    oform.com_grafica.className="form_reg";
                    
                }

                /*
		if (!regexpClave.test(form1.clave_reg.value)) {

			document.getElementById('errclave').className="enbloque error_reg";
			document.getElementById('errclave').innerHTML="La contraseña introducida no es válida.";
			form1.clave_reg.className="form_reg error_reg_cajatexto";
			validado = false;

			
		} else {

			document.getElementById('errclave').className="enbloque";
			document.getElementById('errclave').innerHTML="";
			form1.clave_reg.className="form_reg";

		}


		if(form1.clave_reg.value != form1.claveconf_reg.value){

			document.getElementById('errclaveconf').className="enbloque error_reg";
			document.getElementById('errclaveconf').innerHTML="Las contraseñas no coinciden.";
			form1.claveconf_reg.className="form_reg error_reg_cajatexto";
			validado = false;

		} else {

			document.getElementById('errclaveconf').className="enbloque";
			document.getElementById('errclaveconf').innerHTML="";
			form1.claveconf_reg.className="form_reg";

		}*/
        
        return validado;
        
    }
        
        </script>
	
	
	<style type="text/css">
	</style>
</head>
<body>
    <div id="principal_comentarios">
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

	<div>
            <form id="com_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validarCom(this)">
            <h3> Características del equipo</h3>
            <br>
            <div>
                <div class="form_com_col">
                    <label for="com_procesador">Procesador:</label>
                    <input id="com_procesador" class="form_com" type="text" name="procesador" placeholder="Procesador" maxlength="25" size="30">
                    <span class="requerido"></span>
                    <p id="errcom_procesador" class="enbloque"></p>
                </div>
                <div class="form_com_col">
                    <label for="com_ram">Memoria RAM:</label>
                    <input id="com_ram" class="form_com" type="text" name="ram" placeholder="RAM" maxlength="25" size="30">  
                    <span class="requerido"></span>
                    <p id="errcom_ram" class="enbloque"></p>
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <div class="form_com_col">
                    <label for="com_hdd">Disco Duro:</label>
                    <input id="com_hdd" class="form_com" type="text" name="hdd" placeholder="Disco Duro" maxlength="25" size="30">
                    <span class="requerido"></span>
                    <p id="errcom_hdd" class="enbloque"></p>
                </div>
                <div class="form_com_col">
                    <label for="com_grafica">Tarjeta gráfica:</label>
                    <input id="com_grafica" class="form_com" type="text" name="grafica" placeholder="Tarjeta gráfica" maxlength="25" size="30">
                    <span class="requerido"></span>
                    <p id="errcom_grafica" class="enbloque"></p>
                </div>
            </div>
            <div class="form_com_col_tot">
                <label>Comentario:</label>
		<br>
		<textarea id="com_text" name="comentario" placeholder="Escribe aquí tu comentario" rows="10"></textarea>
		<br>
		<label>Valoración:</label>
		<span><a id="star_1" class="com_star" name="s1" href="#s1" onmouseover="pintarestrella('1');">&#9733;</a><a id="star_2" name="s2" href="#s2" class="com_star"  onmouseover="pintarestrella('2');">&#9733;</a><a id="star_3" name="s3" href="#s3" class="com_star" onmouseover="pintarestrella('3');">&#9733;</a><a id="star_4" name="s4" href="#s4" class="com_star"  onmouseover="pintarestrella('4');">&#9733;</a><a id="star_5" name="s5" href="#s5" class="com_star"  onmouseover="pintarestrella('5');">&#9733;</a></span>
            </div>
            <div class="botones">	
                <input id="botonenvia_reg" class="botones_reg" type="submit">
		<input id="botonlimpiar_reg" class="botones_reg" type="reset">
            </div>
                
                
            
            <!--
            <select style="text-align: right;"class="form_com">
            <option style="text-align: right">2 GB</option>
            <option style="text-align: right">4 GB</option>
            <option style="text-align: right">6 GB</option>
            <option>8 GB</option>
            <option>12 GB</option>
            <option>16 GB</option>
            <option>32 GB</option>
            </select>
            -->
            	


            <script>
            function pintarestrella(n) {
            var valor=parseInt(n);
                for (i = 1; i <= valor ; i++){
                    document.getElementById("star_" + i).style.color='#FFFF00';
                }
                valor++;
                for (i = valor ; i <= 5 ; i++){
                    document.getElementById("star_" + i).style.color='#808080';
                }
            }


            </script>

	</form>


    </div>


</div> <!-- principal_comentarios -->

 <div id="valores" style="background-color: white;color: black">
    <p><?php echo "Procesador: $procesador"?></p>
    <p><?php echo "Memoria RAM: $ram"?></p>
    <p><?php echo "Disco Duro: $hdd"?></p>
    <p><?php echo "Tarjeta Gráfica: $grafica"?></p>
    <p><?php echo "Comentario: $comentario"?></p>
    <p><?php echo "Fecha: $strfecha"?></p>
    <p><?php echo "Fecha: ".$fecha->format('d/m/Y')?></p>
    
    
                    
  </div>

</body>
</html>
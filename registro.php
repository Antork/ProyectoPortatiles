<!DOCTYPE HTML>

<?php

require_once 'validadores.php';

$validado=false;
$nombrefichero="";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $nombre=$_POST["nombre"];
    $apellidos =$_POST["apellidos"];
    $usuario =$_POST["usuario"];
    $usuarioconf =$_POST["usuarioconf"];
    $clave =$_POST["clave"];
    $claveconf =$_POST["claveconf"];
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $anyo = $_POST["anyo"];
    $sexo = $_POST["sexo"];
    $codpost = $_POST["codpost"];
    $publi = $_POST["publi"];
    $fecha="";
    
    if ($nombre == "" || strlen($nombre) < 3 || is_numeric($nombre)) {
        $validado=false;
    } elseif (trim($apellidos) =="" || strlen($apellidos) < 3 || is_numeric($apellidos)){
        $validado = false;
    } elseif(!filter_var($usuario,FILTER_VALIDATE_EMAIL ) ){
        $validado=false;
    } elseif ($usuario !== $usuarioconf) {
        $validado=false;
    } elseif (!validarClave($clave)) {
        $validado=false;
    } elseif ($clave !== $claveconf) {
        $validado=false;
    } elseif (!is_numeric($dia) || !is_numeric($mes) || !is_numeric($anyo)){
        $validado=false;
    } elseif (trim($sexo!=="")) {
        if (strtoupper($sexo) !="H" || strtoupper($sexo)!="M" || strtoupper($sexo="N")){
         $validado=false;
        } else{$validado=true;}
    } elseif (trim($codpost)!="") {
        if(!validarCodpost($codpost)){
        $validado=false;        
        } else{$validado=true;}
    } else {
        $validado=true;
    }
    
    //Si todo es correcto validamos el fichero
    
    if($validado && $_FILES['img_user_reg']['error'] == 0){
        
    	if($_FILES['img_user_reg']['type'] == "image/jpeg"
		|| $_FILES['img_user_reg']['type'] == "image/png")
	{

            move_uploaded_file($_FILES['img_user_reg']['tmp_name'],
            "images_user/".$_FILES['img_user_reg']['name']);
                
            $nombrefichero="images_user/".$_FILES['img_user_reg']['name'];

	}
	else
	{
            $validado=false;
            //echo "<p>El tipo del archivo no es el correcto</p>";		
	}
    }
    else
    {
        $validado=false;
	//echo "<p>Error en la recepcion del archivo</p>";
    }
    
    
    if ($validado){
        
        $fecha=(new DateTime("$anyo/$mes/$dia"))->format('d/m/Y');
        //Insertar datos en la BBDD
                
    }
   
}
    

?>


<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<title>Título de la página</title>
	<!-- <link rel="stylesheet" href="css/estilos.css"> -->
	<script type="text/javascript" src="js/validar_reg.js"></script>
	<link rel="stylesheet" href="css/base.css">
	<style type="text/css">
	</style>

	<script type="text/javascript">


	function borrarForm(form1){

		document.getElementById('errnombre').className="enbloque";
		document.getElementById('errnombre').innerHTML="";
		document.getElementById('nom_reg').className="form_reg";

		document.getElementById('errapellido').className="enbloque";
		document.getElementById('errapellido').innerHTML="";
		document.getElementById('ape_reg').className="form_reg";


		document.getElementById('erremail').className="enbloque";
		document.getElementById('erremail').innerHTML="";
		document.getElementById('user_reg').className="form_reg";
                
                document.getElementById('erremailconf').className="enbloque";
		document.getElementById('erremailconf').innerHTML="";
		document.getElementById('userconf_reg').className="form_reg";

		document.getElementById('errclave').className="enbloque";
		document.getElementById('errclave').innerHTML="";
		document.getElementById('clave_reg').className="form_reg";
		 

		document.getElementById('errclaveconf').className="enbloque";
		document.getElementById('errclaveconf').innerHTML="";
		document.getElementById('claveconf_reg').className="form_reg";


		document.getElementById('errfecnac').className="enbloque";
		document.getElementById('errfecnac').innerHTML="";
		document.getElementById('dia_reg').className="form_reg";
		document.getElementById('mes_reg').className="form_reg";
		document.getElementById('anyo_reg').className="form_reg";
		

		document.getElementById('errcodpost').className="enbloque";
		document.getElementById('errcodpost').innerHTML="";
		document.getElementById('codpost_reg').className="form_reg";



	}
		
	function validar(form1){

		var validado = true;


		var regexpNombre = /^([A-Za-zñÑ]+_?[A-Za-zñÑ]+)$/;
		var regexpApellido=/^([A-Za-zñÑ])+$/;
		//var regexpFecha = /^\d{2}\/\d{2}\/\d{4}$/;
		//var regexpEmail = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		//var regexpEmail = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		var regexpEmail = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})*$/;
		//var regexpClave = /^(?=^.{6,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/;
		//var regexpClave = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/;
		var regexpClave = /(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){6,15}.+$)/;
		//var regexpCP = /^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/;
		var regexpCP = /^(0[1-9]|5[0-2]|[0-4][0-9])[0-9]{3}$/;



		if (form1.nom_reg.value.length < 3) {

			document.getElementById('errnombre').className="enbloque error_reg";
			document.getElementById('errnombre').innerHTML="El Nombre debe tener al menos 3 caracteres.";
			form1.nom_reg.className="form_reg error_reg_cajatexto";
			validado = false;

		} else if (!regexpNombre.test(form1.nom_reg.value)) {

			document.getElementById('errnombre').className="enbloque error_reg";
			document.getElementById('errnombre').innerHTML="El Nombre introducido no es válido.";
			form1.nom_reg.className="form_reg error_reg_cajatexto";
			validado = false;
			
		}	else {

			document.getElementById('errnombre').className="enbloque";
			document.getElementById('errnombre').innerHTML="";
			form1.nom_reg.className="form_reg";

		}

	
		if (!regexpApellido.test(form1.ape_reg.value)) {

			document.getElementById('errapellido').className="enbloque error_reg";
			document.getElementById('errapellido').innerHTML="El Apellido introducido no es válido.";
			form1.ape_reg.className="form_reg error_reg_cajatexto";
			validado = false;
			
		}	else {

			document.getElementById('errapellido').className="enbloque";
			document.getElementById('errapellido').innerHTML="";
			form1.ape_reg.className="form_reg";

		}



		if (!regexpEmail.test(form1.user_reg.value) || form1.user_reg.value=="" ) {

                    document.getElementById('erremail').className="enbloque error_reg";
                    document.getElementById('erremail').innerHTML="La dirección de correo electrónico introducida no es válida.";
                    form1.user_reg.className="form_reg error_reg_cajatexto";
                    validado = false;
			
		}else {

                    document.getElementById('erremail').className="enbloque";
                    document.getElementById('erremail').innerHTML="";
                    form1.user_reg.className="form_reg";
                    
                }
                
                if (form1.user_reg.value !== form1.userconf_reg.value){
                    
                    document.getElementById('erremailconf').className="enbloque error_reg";
                    document.getElementById('erremailconf').innerHTML="La dirección de correo electrónico introducida no coincide.";
                    form1.userconf_reg.className="form_reg error_reg_cajatexto";
                    validado = false;
                                        
                } else{
                    
                    document.getElementById('erremailconf').className="enbloque";
                    document.getElementById('erremailconf').innerHTML="";
                    form1.userconf_reg.className="form_reg";
                    
                }


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

		}

		//Validar fecha

		var dia = parseInt(form1.dia_reg.value);
		var mes = parseInt(form1.mes_reg.value);
		var anyo = parseInt(form1.anyo_reg.value);

		var fecha = new Date(anyo,mes-1,dia);
		var fecha1 = new Date(2012,3,5);

		/*
		if (fecha.getFullYear() != anyo || (fecha.getMonth() + 1) != mes || fecha.getDate() != dia) {


			console.log(fecha.getFullYear());
			console.log(fecha1.getFullYear());
			console.log(anyo);
			console.log('');
			console.log(fecha.getUTCMonth() + 1);
			console.log(fecha1.getUTCMonth() + 1);
			console.log(mes);
			console.log('');
			console.log(fecha.getUTCDate());
			console.log(fecha1.getUTCDate());
			console.log(dia);
			console.log('');
			console.log(fecha.getDate());
			console.log(fecha1.getDate());
			console.log(dia);


		}*/

		
		if (isNaN(dia) || isNaN(mes) || isNaN(anyo)){


			
			document.getElementById('errfecnac').className="enbloque error_reg";
			document.getElementById('errfecnac').innerHTML="La fecha introducida no es una fecha válida.";
			form1.dia_reg.className = "form_reg error_reg_cajatexto";
			form1.mes_reg.className = "form_reg error_reg_cajatexto";
			form1.anyo_reg.className = "form_reg error_reg_cajatexto";

			validado=false;


		} else {


				if (!validarFecha(dia, mes, anyo)){

					document.getElementById('errfecnac').className="enbloque error_reg";
					document.getElementById('errfecnac').innerHTML="Las fecha introducida no es una fecha válida.";
					form1.dia_reg.className = "form_reg error_reg_cajatexto";
					form1.mes_reg.className = "form_reg error_reg_cajatexto";
					form1.anyo_reg.className = "form_reg error_reg_cajatexto";
				
					validado=false;

				} else {

					document.getElementById('errfecnac').className="enbloque";
					document.getElementById('errfecnac').innerHTML="";
					form1.dia_reg.className = "form_reg";
					form1.mes_reg.className = "form_reg";
					form1.anyo_reg.className = "form_reg";

				}


				//var fecha = new Date(anyo,mes-1,dia);
				//console.log(fecha.getTime());
				//var res = fecha.toDateString().toLowerCase().lastIndexOf('invalid');

		}


		//Validar código postal

		if (form1.codpost_reg.value != "") {
			if (!regexpCP.test(form1.codpost_reg.value)) {

				document.getElementById('errcodpost').className="enbloque error_reg";
				document.getElementById('errcodpost').innerHTML="El código postal introducido no es válido.";
				form1.codpost_reg.className="form_reg error_reg_cajatexto";
				validado = false;

			} else {

				document.getElementById('errcodpost').className="enbloque";
				document.getElementById('errcodpost').innerHTML="";
				form1.codpost_reg.className="form_reg";

			}
		}

		return validado;

	}


	function generarFecha(){


		//Generamos dia
		var salida_dia ="<select id='dia_reg' class='form_reg' name='dia'><option selected='selected' value=''>Día</option>";

    for (i=1; i <= 31; i++){

    	salida_dia= salida_dia + "<option value=" + i  +">" + i + "</option>";
    }

    salida_dia=salida_dia + "</select>"

    document.getElementById('dia').innerHTML=salida_dia;

		//Generamos mes
		var salida_mes ="<select id='mes_reg' class='form_reg' name='mes'><option selected='selected' value=''>Mes</option>";

    for (i=1; i <= 12; i++){

    	salida_mes= salida_mes + "<option value=" + i  +">" + i + "</option>";
    }

    salida_mes=salida_mes + "</select>"

    document.getElementById('mes').innerHTML=salida_mes;


		//Generamos año

		var salida_anyo ="<select id='anyo_reg' class='form_reg' name='anyo'><option selected='selected' value=''>Año</option>";
		var val = new Date().getFullYear();

    for (i=val; i >= 1900; i--){

    	salida_anyo = salida_anyo + "<option value=" + i  +">" + i + "</option>";

    }

    salida_anyo=salida_anyo + "</select>"

    document.getElementById('anyo').innerHTML=salida_anyo;



	}

	</script>


</head>
<body id="breg" onreset="borrarForm()" onload="generarFecha()">
    <div id="prin_reg">
        <div>
            <a style="float:right; color:white;" href="index.php">Volver</a>
        </div>
        <h1>Formulario de registro</h1>
	<div>
            
            <form id="formdatos" action="registro.php" method="POST" enctype="multipart/form-data" onsubmit="return validar(this)">
            <!--  
            <form id="formdatos" action="registro.php" method="POST" enctype="multipart/form-data">
            -->
            <div>
                <div class="form_reg_col">
                    <label for="nom_reg">Nombre</label>
                    <input id="nom_reg" class="form_reg" type="text" name="nombre" placeholder="Nombre" maxlength="15" size="25"  title="Nombre del usuario, debe tener al menos 3 carácteres (letras o '_')." autofocus><p class="enlinea">(*)</p>
                    <p id="errnombre" class="enbloque"></p>
                </div>
                <div class="form_reg_col">
                    <label for="ape_reg">Apellidos</label>
                    <input id="ape_reg" class="form_reg" type="text" name="apellidos" placeholder="Apellidos" maxlength="25" size="25" title="Apellidos del usuario, debe tener al menos 1 letra."><p class="enlinea">(*)</p>
                    <p id="errapellido" class="enbloque"></p>
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <div class="form_reg_col">
                    <label for="user_reg">Usuario</label>
                    <input id="user_reg" class="form_reg" type="text" name="usuario" placeholder="algo@ejemplo.com" maxlength="25" size="25"  title="Aquí debe introducir una dirección de correo electrónico válida"><p class="enlinea">(*)</p>
                    <p id="erremail" class="enbloque"></p>
                </div>
                <div class="form_reg_col">
                    <label for="user_reg">Confirmar Usuario</label>
                    <input id="userconf_reg" class="form_reg" type="text" name="usuarioconf" placeholder="algo@ejemplo.com" maxlength="25" size="25"  title="Aquí debe introducir una dirección de correo electrónico válida"><p class="enlinea">(*)</p>
                    <p id="erremailconf" class="enbloque"></p>
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <div class="form_reg_col">
                    <label>Sube una imagen para tu avatar</label> 
                    <div id="img_user_cont" class="img_user_cont_reg">
                        <img id="img_user" class="img_user_format" alt=""
                             
                            <?php if ($validado && $nombrefichero !=""){
                             echo " src='$nombrefichero'>";
                            } else{    
                             echo " src='images/Usuario_Gen.jpg'>";}?>
                             >
                             
                    </div>        
                    <div class="clear"></div>
                    <div>
                        <input class="image_select_reg" type="file" accept="image/jpeg, image/png" id="img_user_reg" name="img_user_reg">
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <div class="form_reg_col">
                    <label for="clave_reg">Contraseña</label>
                    <input id="clave_reg" class="form_reg" type="text" name="clave" maxlength="15" size="25" title="La contraseña debe tener una longitud de entre 6 y 15 caracteres, tiene que tener al menos una letra en mayúscula, una letra en minúscula y un número."><p class="enlinea">(*)</p>
                    <p id="errclave" class="enbloque"></p>
                </div>
                <div class="form_reg_col">
                    <label for="claveconf_reg">Confirmar Contraseña</label>
                    <input id="claveconf_reg" class="form_reg" type="text" name="claveconf" maxlength="15" size="25" title="Confirmar contraseña"><p class="enlinea">(*)</p>
                    <p id="errclaveconf" class="enbloque"></p>
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <div class="form_reg_col">
                    <label>Fecha de nacimiento</label>
                    <div class="fecha_reg" id="dia"></div>
                    <div class="fecha_reg" id="mes"></div>
                    <div class="fecha_reg" id="anyo"></div>
                    <p class="enlinea">(*)</p>
                    <p id="errfecnac" class="enbloque"></p>
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <div class="form_reg_col">
                    <label for="sexo_reg">Sexo</label>
                    <select id="sexo_reg" class="form_reg" name="sexo">
                    <option selected="selected" value="">Seleccione una opción...</option>
                    <option value="h">Hombre</option>
                    <option value="m">Mujer</option>
                    <option value="n">No especificado</option>
                </select>
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <div class="form_reg_col">
                    <label for="codpost_reg">Código postal</label>
                    <input id="codpost_reg" class="form_reg" type="text" name="codpost" placeholder="Código postal" maxlength="5" size="25"><p class="enlinea">&nbsp;</p>
                    <p id="errcodpost" class="enbloque"></p>
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <div class="form_reg_col">
                    <p>
                        <input id="publi_reg" type="checkbox" name="publi" checked>
                        <label for="publi_reg" style="display:inline">Deseo recibir ofertas de todo el mundo por siempre jamas</label>
                    </p>
                </div>
            </div>
            <div class="clear"></div>
            <div class="botones">	
                <input id="botonenvia_reg" class="botones_reg" type="submit">
		<input id="botonlimpiar_reg" class="botones_reg" type="reset">
            </div>
	</form>

        </div>
              
        <div id="valores" style="background-color: white;color: black">
            <p><?php echo "Nombre: $nombre"?></p>
            <p><?php echo "Apellidos: $apellidos"?></p>
            <p><?php echo "Usuario: $usuario"?></p>
                    <p><?php echo "Clave: $clave"?></p>
                    <p><?php echo "Fecha de Nacimiento: $fecha"?></p>
                    <p><?php echo "Sexo: $sexo"?></p>
                    <p><?php echo "Código Postal: $codpost"?></p>
                    <p><?php echo "Publicidad: $publi"?></p>
                    
        </div>
                
    </div>
</body>
</html>
<?php

require_once 'clases.php';

$q = $_REQUEST["q"];

if ($q !== "") {
    
    $respuesta=comprobaruser($q);
    echo $respuesta;
    
}



function comprobaruser($str){
        
    //Conectamos a la BBDD
    $db=new DB();
    $con=$db->conectar();
    if (!is_null($con)){
        
        try{
            
            $STH=$con->prepare("SELECT COUNT(IDUSUARIO)FROM USUARIOS WHERE IDUSUARIO=:usuario");
            $STH->execute(array(':usuario'=>$str));
            $num=$STH->fetchAll();

            return $num[0][0];
            
            
            
        } catch (PDOException $e) {
                
                return 0;
                
            }          
        
    }
        
        
    }
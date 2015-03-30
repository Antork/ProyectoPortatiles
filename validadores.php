<?php

function validarClave($clave){
 
    
    //$regexpClave = "/(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){6,15}.+$)/";
    $regexpClave="/(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z0-9]{6,15}$)/";
    
    if (!preg_match($regexpClave,$clave)){
        return false;
    } else{
        return true;        
    }  
    
}

function validarCodpost($codpost){
   
   $regexpCP = "/^(0[1-9]|5[0-2]|[0-4][0-9])[0-9]{3}$/";
   
   if (!preg_match($regexpCP,$codpost)){
        return false;
    } else{
        return true;        
    }  
        
}



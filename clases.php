<?php

class users{
    
    private $nombre;
    private $apellidos;
    private $usuario;
    private $clave;
    private $fechaNac;
    private $sexo;
    private $codpost;
    private $publi;
    
    public function __construct() {
        
    }
        
    public function createuser($nom_user,$ape_user,$usu_user,$cla_user,$sex_user,$cod_user,$pub_user){
        
        $this->nombre=$nom_user;
        $this->apellidos=$ape_user;
        $this->usuario=$usu_user;
        $this->clave=$cla_user;
        $this->sexo=$sex_user;
        $this->codpost=$cod_user;
        $this->publi=$pub_user;
        
        
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getFechaNac() {
        return $this->fechaNac;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getCodpost() {
        return $this->codpost;
    }

    public function getPubli() {
        return $this->publi;
    }

    public function insertuser(){
        
        
        
    }
    
    public function deleteuser(){
        
        
        
    }
    
    public function modifyuser(){
        
        
        
    }

    
}

class comentarios {
    
    
    private $procesador;
    private $ram;
    private $hdd;
    private $grafica;
    private $feccomen;
    
    
    public function __construct() {
        
    }

    public function getProcesador() {
        return $this->procesador;
    }

    public function getRam() {
        return $this->ram;
    }

    public function getHdd() {
        return $this->hdd;
    }

    public function getGrafica() {
        return $this->grafica;
    }

    public function getFeccomen() {
        return $this->feccomen;
    }

    public function insertcomment(){
        
        
        
    }
    
    public function deletecomment(){
        
        
        
    }
    
    public function modifycomment(){
        
        
        
    }
    
    
    
}
        
        


?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


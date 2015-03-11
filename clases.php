<?php

const RUTA_IMAGEN = "images_user/";

class users{
    
    private $nombre;
    private $apellidos;
    private $usuario;
    private $clave;
    private $fechaNac;
    private $sexo;
    private $codpost;
    private $publi;
    private $fecalta;
    private $imagen;
    
    /*
    public function __construct($nom_user,$ape_user,$usu_user,$cla_user,$sex_user,$cod_user,$pub_user){ 
        
        $this->nombre=$nom_user;
        $this->apellidos=$ape_user;
        $this->usuario=$usu_user;
        $this->clave=$cla_user;
        $this->sexo=$sex_user;
        $this->codpost=$cod_user;
        $this->publi=$pub_user;
       
        
    }*/
    
    public function __construct(){}
    
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
    
    public function getFecalta() {
        return $this->fecalta;
    }
    
    public function getImagen() {
        return $this->imagen;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setCodpost($codpost) {
        $this->codpost = $codpost;
    }

    public function setPubli($publi) {
        $this->publi = $publi;
    }
    
    public function setFecalta($fecalta) {
        $this->fecalta = $fecalta;
    }
    
    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function insertuser(){
        
        
        
    }
    
    public function deleteuser(){
        
        
        
    }
    
    public function modifyuser(){
        
        
        
    }

    
}

class comentarios {
    
    
    private $comenid;
    private $procesador;
    private $ram;
    private $hdd;
    private $grafica;
    private $comentario;
    private $feccomen;
    
    /*
    public function __construct($com_proce,$com_ram,$com_hdd,$com_grafi,$com_comen,$com_fecha) {
            
    }*/

    public function __construct(){}
    
    public function getProcesador() {
        return $this->procesador;
    }

    public function getComenid() {
        return $this->comenid;
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
    
    public function getComentario() {
        return $this->comentario;
    }

    public function getFeccomen() {
        return $this->feccomen;
    }
    
    public function setComenid($comenid) {
        $this->comenid = $comenid;
    }
    
    public function setProcesador($procesador) {
        $this->procesador = $procesador;
    }

    public function setRam($ram) {
        $this->ram = $ram;
    }

    public function setHdd($hdd) {
        $this->hdd = $hdd;
    }

    public function setGrafica($grafica) {
        $this->grafica = $grafica;
    }
    
    public function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    
    public function setFeccomen($feccomen) {
        $this->feccomen = $feccomen;
    }

    
    public function insertcomment(){
        
        return true;
        
    }
    
    public function deletecomment(){
        
        return true;
        
    }
    
    public function modifycomment(){
        
        return true;
        
    }
    
    
    
}
        
 
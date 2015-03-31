<?php

const RUTA_IMAGEN = "images_user/";




class DB {
    
    private $servidor="localhost";
    private $username="Alumno";
    private $password="1234";
    private $bbdd="portatiles";
    
    private $db;
    
    public function __construct(){
        
        
        
    }
    
    public function conectar(){
        
        //$con=  new PDO("mysql:host=".$servidor;dbname=$bbdd;charset=UTF8");
        try {
            $db = new PDO('mysql:host='.$this->servidor.';dbname='.$this->bbdd.';charset=UTF8', $this->username, $this->password);
            //print "Conexión exitosa!";
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
            
            
        }
            catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "";
            
            return null;
        }

        
    }
    
    
    
}



class users{
    
    private $nombre;
    private $apellidos;
    private $usuario;
    private $clave;
    private $fecnac;
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

    public function getFecNac() {
        return $this->fecnac;
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

    public function setFecNac($fecnac) {
        $this->fecnac = $fecnac;
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
    
        
    
    public function selectuser($str){
        
    //Conectamos a la BBDD
    $db=new DB();
    $con=$db->conectar();
    if (!is_null($con)){
        
        try{
            
                                     ;
            
                return array(0,"");
            
            
        } catch (PDOException $e) {
                
                return array(1,$e->getMessage()); 
                
            }          
        
    }
        
        
    }

    public function insertuser(){
  
    //Conectamos a la BBDD
    $db=new DB();
    $con=$db->conectar();
    if (!is_null($con)){
    //Insertamos usuario en la base de datos con PDO    
        try {
            /*
            //insert que incluye fecha de alta
            $STH=$con->prepare("INSERT INTO USUARIOS (idusuario,nombre,apellidos,".
            "imagen,clave,fechanac,sexo,codpost,publicidad,fecalta) ".
            " VALUES (:usuario,:nombre,:apellidos,".
            ":imagen,:clave,:fecnac,:sexo,:codpost,".
            ":publi,:fecalta)");
            
            $STH->execute(array(':nombre'=>$this->nombre,
                                ':apellidos'=>$this->apellidos,
                                ':usuario'=>$this->usuario,
                                ':clave'=>$this->clave,
                                ':fecnac'=>$this->fecnac,
                                ':imagen'=>$this->imagen,
                                ':sexo'=>$this->sexo,
                                ':codpost'=>$this->codpost,
                                ':publi'=>$this->publi,
                                ':fecalta'=>$this->fecalta));
             */
            
            //insert sin fecha de alta, se graba directamente en el mysql
            $STH=$con->prepare("INSERT INTO USUARIOS (idusuario,nombre,apellidos,".
            "imagen,clave,fechanac,sexo,codpost,publicidad) ".
            " VALUES (:usuario,:nombre,:apellidos,".
            ":imagen,:clave,:fecnac,:sexo,:codpost,".
            ":publi)");
            
            $STH->execute(array(':nombre'=>$this->nombre,
                                ':apellidos'=>$this->apellidos,
                                ':usuario'=>$this->usuario,
                                ':clave'=>$this->clave,
                                ':fecnac'=>$this->fecnac,
                                ':imagen'=>$this->imagen,
                                ':sexo'=>$this->sexo,
                                ':codpost'=>$this->codpost,
                                ':publi'=>$this->publi));
                $con=null;
                return array(0,"");
            
            
            } catch (PDOException $e) {
                
                $con=null;
                return array(1,$e->getMessage()); 
                
            }                    
        }       
            
        
    }
    
    public function deleteuser(){
     
   //Conectamos a la BBDD
    $con=new DB.conectar();
    if (!is_null($con)){
    //Borramos el usuario en la base de datos con PDO    
        try {
            $con->exec("DELETE FROM USUARIOS WHERE USUARIO=".$this->usuario);
            
            
            } catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "";
            }                    
        
            $con=null;
    }            
       
    }
    
    public function modifyuser(){
        
     //Conectamos a la BBDD
    $con=new DB.conectar();
    if (!is_null($con)){
    //Modificamos usuario en la base de datos con PDO    
        try {
            $STH=$con->exec("UPDATE USUARIOS SET NOMBRE=:nombre,APELLIDOS=:apellidos,".
            "CLAVE=:clave,FECHANAC=:fecnac,SEXO=:sexo,CODPOST=:codpost,".
            "PUBLI=:publi,FECALTA=:fecalta,IMAGEN=:imagen".
            " WHERE USUARIO=:usuario");    
            $STH->execute((array)$this);
            
            } catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "";
                die();
            }                    
    }          
        
        
        
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
        
 
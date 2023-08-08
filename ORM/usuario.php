<?php 
require_once('ORMusuario.php');

class Usuario{

    public $ID;
    public $nombre;
    public $apellido;
    public $email;
    public $usuario; //nivel del usuario ej: usuario o admin
    public $contrasena;

    function __construct($nombre , $apellido , $email, $contrasena){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->email=$email;
        $this->contrasena=$contrasena;
        
    }


    public function get_ID(){
        return $this->ID;
    }

    public function get_nombre(){
        return $this->nombre;
    }

    public function get_apellido(){
        return $this->apellido;
    }

    public function get_email(){
        return $this->email;
    }

    public function get_usuario(){
        return $this->usuario;
    }

    public function get_contrasena(){
        return $this->contrasena;
    }

    //-----------Setters------------//

    public function set_ID($I){
        $this->ID = $I;
   }

    public function set_nombre($n){
         $this->nombre = $n;
    }

    public function set_apellido($a){
         $this->apellido = $a;
    }

    public function set_email($e){
         $this->email = $e;
    }

    public function set_usuario($u){
         $this->usuario = $u;
    }

    public function set_contrasena($c){
         $this->contrasena = $c;
    }

}



?>
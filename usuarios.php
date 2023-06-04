<?php
require_once('ORM.php');
class Usuarios
{
    public $nombre;
    public $tlf;
    public $mail;

    function __construct($nombre , $tlf , $mail)
    {
        $this->nombre=$nombre;
        $this->tlf=$tlf;
        $this->mail=$mail;
    }

    public function get_nombre()
    {
        return $this->nombre;
    }

    public function get_tlf()
    {
        return $this->tlf;
    }

    public function get_mail()
    {
        return $this->mail;
    }

}

//Creamos los objetos usuarios
$cliente1 = new Usuarios("Luis","1128053324","luis.diaz@gmail.com");
$cliente2 = new Usuarios("Cesar","1125896311","cesar.rivero@gmail.com");
$cliente3 = new Usuarios("Nacho","1178945612","nacho.armendariz@gmail.com");

insertarDB($cliente1);
insertarDB($cliente2);
insertarDB($cliente3);
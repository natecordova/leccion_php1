<?php

class Demo
{
    private $iddemo;
    private $nombre;
        private $tipo;
        private $fechaNacimiento;
     function __construct($iddemo, $nombre, $tipo,$fechaNacimiento) {
       $this->iddemo = $iddemo;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
	$this->fechaNacimiento = $fechaNacimiento;         

     }
    
     function setIdDemo($iddemo){
       $this->iddemo = $iddemo;
     } 
     function getIdDemo(){
       return $this->iddemo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     }
	     function setFechaNacimiento($fechaNacimiento){
       $this->fechaNacimiento = $fechaNacimiento;
     } 
     function getFechaNacimiento(){
       return $this->fechaNacimiento;
     }


 
}

?> 

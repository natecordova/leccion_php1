<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'iddemo'},$c{'nombre'},$c{'tipo'},$c{'fechaNacimiento'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM demo where iddemo= ? ", array ("{$id}"));        
$ObjDemo= new Demo($rows[0]{'iddemo'},$rows[0]{'nombre'},$rows[0]{'tipo'},$rows[0]{'fechaNacimiento'});  
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$nombre,$tipo,$fechaNacimiento) {
    $insertrow = self::$db->updateRow("UPDATE public.demo SET nombre = ? SET tipo = ? SET fechaNacimiento = ? where iddemo= ? ", array ("{$nombre}","{$tipo}","{$fechaNacimiento}",$id));

}
function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.demo where iddemo= ? ", array ("{$id}"));

}

function createDemo($nombre){
	$insertrow =self::$db->insertRow("INSERT INTO public.demo(nombre) VALUES (?) ", array("$nombre"));

}




}
?>


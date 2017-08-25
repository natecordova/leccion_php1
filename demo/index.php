<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO</title>
	</head>
<body>
<header>
<nav>
<a href="inicio.html">Inicio</a>
<a href="inicio.html">Nosotros</a>
<a href="inicio.html">Servicios</a>
<a href="inicio.html">Contactenos</a>
</nav>
</header>
<section>
</section>
<section>

</section>
<aside>
<?php
echo "<p> hola usuario:(".$_SESSION['MiSession'].") [<a href='salir.php'>Salir</a>]</p> <a href='formularioDemoInsertar.php'>Nuevo</a>";
include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdDemo() . "  && " .$c->getNombre()."<a href='formularioDemoeditar.php?id=".$c->getIdDemo()."'>Editar</a> <a href='eliminar.php?id=".$c->getIdDemo()."'>Eliminar</a>";                                     
  echo "</div>"; 
}

?>

</aside>
</body>
</html>

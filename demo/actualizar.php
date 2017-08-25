<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> actualizar demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$iddemo=$_POST["iddemo"];
$tipo=$_POST["tipo"];
$fechaNacimiento=$_POST["fechaNacimiento"];



echo "Edicion en proceso . . . . </br>";
include_once("DemoCollector.php");
$DemoCollectorObj= new DemoCollector();
$DemoCollectorObj->updateDemo($iddemo,$nombre,$tipo,$fechaNacimiento);
echo "id: ".$iddemo." actualizado a:".$nombre."tipo:".$tipo." fecha:".$fechaNacimiento." </br>";
?>

<div class="text-fieldsl">
         <a href='index.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>

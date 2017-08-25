<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id=$_GET["id"];
echo "el valor de id es ".$id;
include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj= new DemoCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id);
print_r($ObjDemo);
?>
<h2>Editar Objeto Demo</h2>
<form id="contact-form" action="actualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="iddemo" id="iddemo" type="text" value="<?php echo $ObjDemo->getIdDemo(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjDemo->getNombre(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>

<div class="float-input">
TIPO:	<input name="tipo" id="tipo" type="text" value="<?php echo $ObjDemo->getTipo(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>

<div class="float-input">
FECHA DE NACIMIENTO:	<input name="fechaNacimiento" id="fechaNacimiento" type="text" value="<?php echo $ObjDemo->getFechaNacimiento(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>




<a href="index.php">Cancelar</a>
<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>

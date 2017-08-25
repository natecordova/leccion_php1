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


<h2>Crear Objeto Demo</h2>
<form id="contact-form" action="guardarDemo.php" method= "post">


<p>Nombre: <input type="text" name="nombre" autofocus required/> </p>


<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</form>

</body>
</html>

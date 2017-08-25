<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> PSW + Cookie pagina +NOMBRE</title>
	</head>
<body>
<header>
<nav>
<a href="#">Inicio</a>
<a href="#">Nosotros</a>
<a href="#">Servicios</a>
<a href="#">Contactenos</a>
</nav>
</header>
<section>





</section>

<h1>Perfil</h1>

<section id="main">
<?php
$_SESSION['MiSession']= $_POST['usuario'];
$nombre= $_POST['usuario'];
$password= $_POST['clave'];
$id=$_GET["id"];
echo "el valor de id es ".$id;



echo "Usuario: ".$nombre. " y contraseña: ".$password;




?>
</section>

<img src="images/dead.jpg" width="150px"></img>
<h1>Nombre</h1>
<p> <?php   echo "<b>Nombre:</b> ".$nombre. " <b>Tipo:</b> 123 <b>Fecha de nacimiento:<b> 07/12/90";


echo "<br><br><br><a href='index.php'>Editar</a>  <a href='index.php'>Eliminar</a>"



?><p>











</body>
</html>



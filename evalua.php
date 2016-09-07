<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
	<title>evalua del ejercico 10</title>
</head>
<body>
<?php 
$user = $_GET['user'];
$password = $_GET['password'];
if(($user=="admin")and($password=="admin")){echo "bienvenido usuario---->".$user."<----";}else{echo " contraseña incorrecta vuelva <br>a introducir datos";}
//echo "<br> <a href=".$server['http_referer'].">volver</a>';
//else{ echo "usuario incorrecto";}

 ?>

</body>
</html>
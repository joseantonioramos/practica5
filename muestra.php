<!DOCTYPE html>
<html>
<head>
	<title>muestra del ejerccio 9</title>
	<style>
  *{
    margin: 0;
    padding: 0;
    
  }
   body	{
   	background-color: royalblue;
   }
   h1{
   	background-color: mediumblue;
   	color:;
   	text-align: center;

   }
   </style>
</head>
<body>
<h1>DATOS INTRODUCIDOS</h1>
<?php 
$nom=$_GET["nombre"];
$ap=$_GET["apellido"];
$correo=$_GET["correo"];
$com=$_GET["comentarios"];
echo "Nombre Introducido es--------->:".$nom."<br>";
echo "Los apellidos introducidos es-->:".$ap."<br>";
echo "El correo introducido es-------->:".$correo."<br>";
echo "Su comentario fue--------------->:".$com."<br>";
 ?>

</body>
</html>
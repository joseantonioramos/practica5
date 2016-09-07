<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 11</title>
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
<h1> FIXTURE</h1>
<?php 
$equipo1=$_POST['equipo1'];
$equipo2=$_POST['equipo2'];
$equipo3=$_POST['equipo3'];
$equipo4=$_POST['equipo4'];
$equipo5=$_POST['equipo5'];
$equipo6=$_POST['equipo6'];
$entrada= array(" equipo'1' ". $equipo1," equipo '2' ".$equipo2," equipo '3' ".$equipo3," equipo '4' ".$equipo4," equipo '5' ".$equipo5," equipo'6' ".$equipo6);


//$array = range(0,5);
shuffle($entrada);
$desordenado=array_slice($entrada,0,5);
echo "<h2>PRIMERA FECHA</h2>";
echo $entrada[0]." con ";
echo $entrada[1];
echo "<h2>SEGUNDA FECHA</h2>";
echo $entrada[2]." con ";
echo $entrada[3];
echo "<h2>TERCERA FECHA</h2>";
echo $entrada[4]." con";
echo $entrada[5];


//$seleccion= array_rand($)

 ?>
</body>
</html>
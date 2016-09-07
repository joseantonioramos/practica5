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
   	margin:5%;
   	background-color: mediumblue;
   	color:;
   	text-align: center;

   }
   h2{
   	padding: 5%;
   	background-color:#483d8b;
   		text-align: center;
   }
   form{
   	text-align: center;
   	margin: 3%;
   	padding: 10;
   }
   select{

   }
   </style>
</head>
<body>
<h1>11. Crear un formulario que reciba los nombres de seis (6) equipos y un botón que al pulsar
genere un fixture de partidos</h1>
<form action="crear.php" method="POST">
	<label>EQUIPO 1</label>
	<input type="text" name="equipo1" value="">
	<label>EQUIPO 2</label>
	<input type="text" name="equipo2" value="">
	<label>EQUIPO 3</label>
	<input type="text" name="equipo3" value=""><br><br><br>
	<label>EQUIPO 4</label>
	<input type="text" name="equipo4" value="">
	<label>EQUIPO 5</label>
	<input type="text" name="equipo5" value="">
	<label>EQUIPO 6</label>
	<input type="text" name="equipo6" value=""><br><br>
	<input type="submit" name="" value="crear fixture">
	<input type="reset" name="" value="borrar">

</form>
</body>
</html>
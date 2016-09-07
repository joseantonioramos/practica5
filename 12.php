<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 12</title>
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
<h1>12. Crear un simulador de lanzamiento de dos (2) y cinco (5) dados.</h1>
<h2>ELIJA UNA DE LAS OPCIONES DE LOS DADOS Y LUEGO PULSE LANZAR DADOS </h2>
<form id="form" action="dado.php" method="GET">
	<lavel>
		<input type="submit" name="button" value="lanzar dado">
	</lavel>	
	<p><br>
		<lavel>
			<select id="select" name="dado">
			<option value="2">2 dados</option>		
			<option value="5">5 dados</option>
				
			</select>
		</lavel>
	</p>
	
		
</form>
</body>
</html>
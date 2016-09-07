<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 9</title>
	<style>
  *{
    margin: 0;
    padding: 0;
   
  }
   body {
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
<h1>9. Crear un formulario de contacto que reciba los siguientes campos: nombre, apellidos,
correo y comentario. Una vez que se pulse el botón enviar debe mostrar los datos
recibidos.</h1>
<form action="muestra.php" method="$_GET">
	<table>
		<tr>
			<td>NOMBRE:</td>
		    <td><input type="text" name="nombre" value=""></td>
		</tr>
		<tr>
			<td>APELLIDOS:</td>
			<td><input type="text" name="apellido" value=""></td>
		</tr>
		<tr>
			<td>CORREO:</td>	
			<td><input type="text" name="correo"  value=""></td>
		</tr>
		<tr>
			<td>COMENTARIOS:</td>
            <td><textarea name="comentarios" rows="5" cols="35" value=""></textarea></td>
  		</tr>
  		<tr>
  		    <td><input type="submit" name="introducir" value="Introducir datos"></td>
            <td><input type="reset" name="borrar" value="Borrar datos"></td>	
  		</tr>
  		 	
	</table>

</form>
</body>
</html>

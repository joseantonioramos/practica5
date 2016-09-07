<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>ejercicio 10</title>
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
  table{
     text-align: center;
    margin: 3%;
    padding: 10;
  }
   </style>
  }
</head>
<body>
<h1>10. Crear un formulario de identificación de usuario que reciba usuario, contraseña, captcha
y un botón Enviar, en caso correcto mostrar una página dándole la bienvenida, en caso
contrario volver a mostrar el formulario.</h1>

<form id="form" method="GET" action="evalua.php" >
	<table id="table">
		<tr>
			<td>USUARIO:</td>
		    <td><input type="text" name="user" value=""></td>
		</tr>
		 <tr>
		    <td>CONTRASEÑA:</td>
			<td><input type="password" name="password" value=""></td>
		</tr>
  		<tr>
  		    <td><input type="submit" name="" value="introducir"></td>
            <td><input type="reset" name="" value="borrar"></td>	
  		</tr>
  		 	
	</table>

</form>

</body>
</html>
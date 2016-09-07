<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>ejercicio 7</title>
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
</head>
<body>
<h1>7. Programar un formulario que reciba tres números y determine cuál es el mayor, el del
medio y el menor.</h1>

<form  method="GET" action="compara.php">
<table>
    <th>
          <td> 
              <label> PRIMER VALOR </label>
	          <input type="text" name='numero1' value=""> <br>
	      </td>
   </th>
	<th>
		<td>
			   <label> SEGUNDO VALOR </label>
	           <input type="text" name='numero2' value=""> <br>
		</td>
	</th>
    <th>
		<td>
			   <label> TERCER VALOR </label>
	           <input type="text" name='numero3' value=""> <br>
		</td>
	</th>	
</table>
<br>
<input type="submit" value="compara">
<input type="reset" value="limpia">

</form>
</body>
</html>
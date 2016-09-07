<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>2. Crear la misma tabla pero colorear las filas alternando el fondo con amarillo y blanco.
El tamaño debe estar definido como constante usando la función define</title>
<style>
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
<h1> 2. Crear la misma tabla pero colorear las filas alternando el fondo con amarillo y blanco.
El tamaño debe estar definido como constante usando la función <strong>define</strong></h1>
<table border="2">
		<?php 
    for($a=0;$a<=90;$a+=10){
    	echo "<tr>";
     $b=1;
        for($i=1;$i<=10;$i++){
            $v=fmod($i,2);
        	if($v==1){
     		echo "<td bgcolor='yellow'>";
    		echo $a+$i;
    		echo "</td>";}
    		else{
    			echo "<td bgcolor='#fff'>";
    		echo $a+$i;
    		echo "</td>";
    		}
    	}
       	echo "</tr>"; 
       }
	 ?>
	 </table>
</body>
</html>
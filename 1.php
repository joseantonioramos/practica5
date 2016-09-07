<!DOCTYPE html>
<html lang="ES">
<head>
<META CHARSET="UTF-8">
	<title>1. Mostrar en pantalla una tabla de 10 x 10
	 con los números del 1 al 100</title>
	 <style >
body	{
   	background-color: royalblue;
   }
   table {
   	background-color: #fff;
   }
   h1{
    margin: 5%;
    text-align: center;
    background-color: mediumblue;
   }
	 </style>
   
</head>
<body>
<h1>1. Mostrar en pantalla una tabla de 10 x 10
	 con los números del 1 al 100</h1>
<table border="1">
	<?php 
    for($a=0;$a<=90;$a+=10){
    	echo "<tr>";
     $b=1;
        for($i=1;$i<=10;$i++){
     		echo "<td>";
    		echo $a+$i;
    		echo "</td>";
    	}
       	echo "</tr>"; 
       }
	 ?>
</table>

</body>
</html>
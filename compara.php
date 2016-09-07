<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>compara</title>
	<style>
  *{
    margin: 0;
    padding: 0;
    	text-align: center;
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
<p>
<?php 
$num1=$_GET['numero1'];
$num2=$_GET['numero2'];
$num3=$_GET['numero3'];

$num4=$_GET['numero1'];
$num5=$_GET['numero2'];
$num6=$_GET['numero3'];

$num7=$_GET['numero1'];
$num8=$_GET['numero2'];
$num9=$_GET['numero3'];

if($num4>$num5){$may=$num4;}else{$may=$num5;}
if($num6>$may){$may=$num6;}else{$may=$may;}

echo "EL  NUMERO MAYOR ES--->".$may."<br>";

if($num7>$num8 and $num7<$num9){echo "EL NUMERO DEL MEDIO ES--->".$num7."<br>";}
else{if($num7<$num8 and $num7>$num9)echo "EL NUMERO DEL MEDIO ES--->".$num7."<br>"; }
if($num8>$num7 and $num8<$num9){echo "EL NUMERO DEL MEDIO ES--->".$num8."<br>";}
else{if($num8<$num7 and $num8>$num9)echo "EL NUMERO DEL MEDIO ES--->".$num8."<br>"; }
if($num9>$num7 and $num9<$num8){echo "EL NUMERO DEL MEDIO ES--->".$num9."<br>";}
else{if($num9<$num7 and $num9>$num8)echo "EL NUMERO DEL MEDIO ES--->".$num9."<br>"; }


if($num1<$num2){$men=$num1;}else{$men=$num2;}
if($num3<$men){$men=$num3;}else{$nem=$num3;}
echo "EL NUMERO DEL MEDIO ES---->".$men."<br>";

 ?>

</p>
</body>
</html>
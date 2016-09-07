<!DOCTYPE html>
<html lang"es">
<head>
    <meta charset="utf-8">
	<title>fecha</title>
</head>
<body>
<h1>LA FECHA ES</h1>
<?php 

$fecha=$_GET['fecha'];
$dia=$fecha[8].$fecha[9];
$mez=$fecha[5].$fecha[6];
$año=$fecha[0].$fecha[1].$fecha[2].$fecha[3];
echo $dia;
if($mez=="01"){echo " de enero ";}
if($mez=="02"){echo " de febrero ";}
if($mez=="03"){echo " de marzo ";}
if($mez=="04"){echo " de Abril ";}
if($mez=="05"){echo " de Mayo ";}
if($mez=="06"){echo " de Junio ";}
if($mez=="07"){echo " de Julio ";}
if($mez=="08"){echo " de Agosto ";}
if($mez=="09"){echo " de Septiembre ";}
if($mez=="10"){echo " de Octubre ";}
if($mez=="11"){echo " de Noviembre ";}
if($mez=="12"){echo " de Diciembre ";}

echo $año;
//echo "el dia es".$dia;
//echo "el mez es".$mez;
//echo "el año es".$año;
//if($mez=="03"){echo "de marzo";}
 ?>
</body>
</html>

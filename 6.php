<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="utf-8">
	<title>ejercico 6</title>
	<style>
  *{
    margin: 0;
    padding: 0;
    	text-align: center;
  }
   body	{
   	background-color: royalblue;;
   }
   h1{
    margin: 5%;
   	background-color: mediumblue;
   	color:;
   	text-align: center;

   }
   </style>
</head>
<body>
<h1>6. Imprima los valores de un arreglo asociativo usando la instrucción <strong>foreach</strong></h1>

<?php 
$arrayasociativos= array("Agfanistan","Albania","Australia","Argentina","Armenia","Bahamas","Belgica","Benin",
"Bolivia","Brasil","Canada","Islas Caiman","Cabo Verde","Chile","Colombia","Cuba","Ecuador","Egipto","Gabon");
foreach ($arrayasociativos as $key) {
	echo $key. "<br>";
                                              }
 


?>

</body>
</html>
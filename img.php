<!DOCTYPE html>
<html>
<head>
	<title>carpeta de imagenes</title>
	<style>
  *{
    margin: 0;
    padding: 0:;
  }
   body	{
   	background-color: dodgerblue;
   }
   h1{
   	background-color: mediumblue;
   	color:;
   	text-align: center;

   }
   h2{
    text-align: center;
    background-color: red;
    color:yellow;
   }
   </style>
</head>
<body>
<h1>todas las imagenes</h1>
<?php 
$directory="img_comp";
$dirint=dir($directory);
while(($archivo=$dirint->read())!==false){
echo '<img src="'.$directory."/".$archivo.'">'."\n";
}
$dirint->close();
 ?>';

</body>
</html>
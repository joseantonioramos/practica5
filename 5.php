<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title></title>
	<style>
  *{
    margin: 0;
    padding: 0:;
  }
   body	{
   	background-color: royalblue;
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
   #primera{
    text-align: center;
    background-color: blue;
    margin: 1%;
    width: 15%;
    float: left;
   }
   #seg{
   text-align: center;
    background-color: blue;
    margin: 1%;
    width: 15%;
    float: left;
   }
   #ter{
    text-align: center;
    background-color: blue;
    margin: 1%;
    width: 15%;
    float: left;
   }
   #cuar{
    text-align: center;
    background-color: blue;
    margin: 1%;
    width: 15%;
    float: left;
   }
   
   </style>
</head>
<body>
<h1>5. Crear un programa que muestre las imágenes que 
contiene un directorio en cuatro columnas, además al
 pulsar sobre cualquier imagen debe mostrar la imagen en
  tamaño real (En la carpeta puede existir cualquier número de imágenes)</h1>
<h2>IMAGENES</h2>

  <div id="primera">
  <h3>primera columna</h3>
   <a href="img.php"><img src="img_comp/A(1).jpg" alt= "visita_imagenes" whidth="300" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (10).jpg" alt= "visita_imagenes" whidth="300" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (2).jpg" alt= "visita_imagenes" whidth="300" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (3).jpg" alt= "visita_imagenes" whidth="300" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (4).jpg" alt= "visita_imagenes" whidth="300" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (5).jpg" alt= "visita_imagenes" whidth="300" height="150" border="2"></a>
  </div>
  
  <div id="seg">
  <h3>segunda columna</h3>
  <a href="img.php"><img src="img_comp/A (6).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (7).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (8).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (9).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (11).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (12).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  
  </div>
  
 <div id="ter">
  <h3>tercera columna</h3>
  <a href="img.php"><img src="img_comp/A (13).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (14).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (15).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (16).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (17).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (18).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  </div>

  <div id="cuar">
  <h3>cuarta columna</h3>
  <a href="img.php"><img src="img_comp/A (19).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (20).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (21).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (22).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (23).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  <a href="img.php"><img src="img_comp/A (24).jpg" alt= "visita_imagenes" whidth="200" height="150" border="2"></a>
  </div> 
<?php 
//echo '<img src="img_comp/A (24).jpg">';
 ?>
</body>
</html>
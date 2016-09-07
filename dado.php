<html>
<head>
	<title>ejercicio del dado num12</title>
	<style>
  *{
    margin: 0;
    padding: 0;
   
  }
   body	{
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
  form{
  	text-align: center;
  }
   </style>
</head>
<body>
<h1>VALORES DE DADOS LANZADOS</h1>

<form id='form'>
<?php
$_GET["dado"]; 
$d=$_GET["dado"]; 
echo "<h1>SE LANZARON ".$d. " DADOS <br></h1>";
"<br>";
if($d==2){
$dado1=array(1,2,3,4,5,6);

$saca1=array_rand($dado1,1);
$saca2=array_rand($dado1,1);

echo "EL PRIM DADO SU VALOR QUE SALIO ES...".$saca1."<BR>";
echo "EL SEG DADO SU VALOR QUE SALIO ES....".$saca2;

}
if($d==5){
	$dado1=array(1,2,3,4,5,6);
	$saca1=array_rand($dado1,1);
    $saca2=array_rand($dado1,1);
    $saca3=array_rand($dado1,1);
    $saca4=array_rand($dado1,1);
    $saca5=array_rand($dado1,1);

	echo "EL PRIMER0 DADO SU VALOR QUE SALIO ES...".$saca1."<BR>";
    echo "EL SEGUND DADO SU VALOR QUE SALIO ES....".$saca2."<br>";
    echo "EL TERCERO DADO SU VALOR QUE SALIO ES...".$saca3."<BR>";
    echo "EL CUARTO DADO SU VALOR QUE SALIO ES....".$saca4."<br>";
    echo "EL QUINTO DADO SU VALOR QUE SALIO ES....".$saca5."<BR>";


}




 ?>
</form>
</body>
</html>
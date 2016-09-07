<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title></title>
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
<h1>3. Generar un tablero de ajedrez alternando colores de cada casilla y como contenido
mostrar un número</h1>
<table whidth="500"height="500px" border="1" cellpadding="25">
		<?php
		 $c=0;
	    for($a=0;$a<=60;$a+=8)         {
    	
        if($a==8){$c=1; }
    	if($a==16){$c=0; }
    	if($a==24){$c=1; }
    	if($a==32){$c=0; }
    	if($a==40){$c=1; }
    	if($a==48){$c=0; }
    	if($a==56){$c=1; }
    	if($a==64){$c=0; }
    
    		   
       	echo "<tr >";
         
        for($i=1;$i<=8;$i++){
            $v=fmod($i,2);
          
           	   if($v==$c){

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
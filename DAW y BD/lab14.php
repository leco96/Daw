 <?php
    require_once("modelo.php");
 ?>

<div class="tabPhp" style="top:100px; left:650px;">
 	<h2><strong>Consultas dinamicas PHP</strong></h2>
</div> 

 <div class="tabPhp" style="top:200px; left:50px;">
 	<strong>Funcion sin parametro, que muestra todos los datos</strong>
 	<br>
 	<strong>Resultado:</strong>
	<?php
    	echo getFruits();
	?>
 </div>    

 <div class="tabPhp" style="top:200px; left:575px;">
 	<strong>Funcion que recibe como parametro una fruta</strong>
 	<br>
 	<strong>Resultado:</strong>
	<?php
    	echo getFruitByName("Platano");
	?>
 </div>  

 <div class="tabPhp" style="top:200px; left:1050px;">
 		<strong>Funcion que recibe como parametro el precio que no debe de exceder</strong>
 	<br>
 	<strong>Resultado:</strong>
	<?php
    	echo getFruitCheapest("15");
	?>
 </div>  


  




</div>
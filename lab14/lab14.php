 <?php
    require_once("modelo.php");
 ?>

<div class="tabPhp" style="top:100px; left:650px;">
 	<h2><strong>Consultas dinamicas PHP</strong></h2>
</div> 

 <div class="tabPhp" style="top:200px; left:50px;">
	<?php
    	echo getFruits();
	?>
 </div>    

 <div class="tabPhp" style="top:200px; left:550px;">
	<?php
    	echo getFruitByName("Platano");
	?>
 </div>  

 <div class="tabPhp" style="top:200px; left:1050px;">
	<?php
    	echo getFruitCheapest("15");
	?>
 </div>  


  




</div>
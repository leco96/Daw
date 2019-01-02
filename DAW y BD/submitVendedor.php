<?php require_once("modeloReporte.php");?>

<div>
	
<?php
	var_dump($_GET['nombreVendedor']);
	var_dump($_GET['domicilio']);
	var_dump($_GET['telefono']);

	if(!getNombreVendedor($_GET['nombreVendedor'])){

		submitVendedor($_GET['nombreVendedor'],$_GET['domicilio'],$_GET['telefono']);
	}
	
	?>


</div>

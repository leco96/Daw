<?php require_once("modeloReporte.php");?>

<div>
	
<?php
	var_dump($_GET['vendedor']);
	var_dump($_GET['cliente']);
	var_dump($_GET['fecha']);
	var_dump($_GET['Cantidadconsumo']);
	var_dump($_GET['observaciones']);

	if(getNombreCliente($_GET['cliente']) && getNombreVendedor($_GET['vendedor'])){
		submitVenta($_GET['vendedor'],$_GET['cliente'],$_GET['fecha'],$_GET['Cantidadconsumo'],$_GET['observaciones']);
	}else{
		echo "No existe el vendedor o el cliente";
	}
	
	
	?>


</div>



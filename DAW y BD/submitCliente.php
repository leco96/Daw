<?php require_once("modeloReporte.php");?>

<div>
	
<?php

	if(!getNombreCliente($_GET['nombreCliente'])){

		submitNombreCliente($_GET['nombreCliente']);

		if(!getNombreMunicipio($_GET['municipio'])){

			submitNombreMunicipio($_GET['municipio']);
			submitClienteMunicipio($_GET['nombreCliente'],$_GET['municipio']);

		}else{
			submitClienteMunicipio($_GET['nombreCliente'],$_GET['municipio']);
			echo "Se encontro el mismo municipio";
		}

		if(!getClaveTanque($_GET['clave'])){

			submitTanque($_GET['clave'],$_GET['capacidad'],$_GET['contrata']);
			submitClienteTanque($_GET['nombreCliente'],$_GET['clave']);

		}else{
			 echo "<br>Se encontro el mismo tanque";
		}
		
	}else
	 echo "Se encontro el mismo cliente";
	
?>


</div>



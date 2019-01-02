<?php require_once("modeloReporte.php");?>
<div class="form-row">
	<div class="form-group col-md-6">
		<?php include("ventaTotalesGraph.php"); ?>
	</div>
	<div class="form-group col-md-6">
		<table>
		  <tr>
		    <th class="td_g" style="font-size: 20px;">Promedio de ventas totales</th>
		  </tr>
		  <tr>
		    <td class="td_g" style="font-size: 20px;"><?php echo promedioVentas(); ?></td>
		  </tr>
		  <tr>
		    <th class="td_g" style="font-size: 20px;">Mayor venta registrada</th> 
		  </tr>
		  <tr>
		    <td class="td_g" style="font-size: 20px;"><?php echo mayorVenta();?></td>
		  </tr>
		  <tr>
		    <th class="td_g" style="font-size: 20px;">Menor venta registrada</th> 
		  </tr>
		  <tr>
		    <td class="td_g" style="font-size: 20px;"><?php echo menorVenta(); ?></td>
		  </tr>
	</table>
	</div>
</div>

<hr>

<div class="form-row">
	<div class="form-group col-md-6">
		<h4>Clientes por municipio</h4>
		<?php include("clientesPorMunicipio.php"); ?>
	</div>
	<div class="form-group col-md-6">
		<h4>Tanques por municpio</h4>
		<?php include("TanquePorMunicipio.php");  ?>
	</div>
	<div class="form-group col-md-7">
		<table>
		  <tr>
		    
		    <th class="td_g" style="font-size: 20px; ">Municipio con MAYOR Venta</th> 
		    <th class="td_g" style="font-size: 20px;">Municipio con MENOR Venta</th>
		  </tr>
		  <tr>
		    
		    <td class="td_g" style="font-size: 20px;"><?php  echo municipiosMayorVenta(); ?></td>
		    <td class="td_g" style="font-size: 20px;"><?php echo municipiosMenorVenta(); ?></td>
		  </tr>
		  
		</table>
	</div>
	
</div>

<hr>

<div class="form-row">
	<div class="form-group col-md-12">
		<h4>Consumo por clientes</h4>
		<?php include("clientesGraph.php"); ?>
	</div>
	<div class="form-group col-md-7">
		<div class="form-group col-md-12">
			<table>
				<tr>
                	<th>Clientes que aumentaron su consumo de 2017 a 2018</th>
             	</tr>
				<?php 
                    	$str= getClientes();
						$words = explode(",",$str);
						for($j=0; $j<count($words); $j++)
						{
							echo aumentaronConsumo($words[$j]);
						}          
			 ?>
			 </table>
		</div>
		<div class="form-group col-md-12">
				<table>
				<tr>
                	<th>Clientes que disminuyeron su consumo de 2017 a 2018</th>
             	</tr>
			<?php 
                    	$str= getClientes();
						$words = explode(",",$str);
						for($j=0; $j<count($words); $j++)
						{
							echo disminuyeronConsumo($words[$j]);
						}          
			 ?>
			 </table>
		</div>
	</div>
	
</div>



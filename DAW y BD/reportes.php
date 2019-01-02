<?php require_once("modeloReporte.php");?>

<div class="card text-center absol" style="top:100px; left: 50px;">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="#" id="RegitsrarVenta">Registrar venta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="RegistrarCliente">Registrar Cliente/Vendedor</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#" id="ReporteVendedor">Reportes</a>
      </li>
    </ul>
  </div>
  <div class="card-body" id="cuerpoVentas">
    <p class="card-text">
    	<?php
  			include("registrarVenta.php");
  		?>
    </p>
  </div>
</div>

</div>


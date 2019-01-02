<?php require_once("modeloRBAC.php");?>
<div class="card" id="cardPerfilCasino" style="top:90px; left:40px;">
  <div class="card-body">
  <h5 class="card-title ">
    <ul class="nav">
      <div class="logoCasino" style="top:0px; left:0px;">
        <strong>CasinoLife</strong> 
      </div>
      <div class="faceInput" style="top:20px; left:1200px;">
        <li class="nav-item" >
         <?php if (isset($_SESSION["usuarioC"])): ?>
              <?=$_SESSION["usuarioC"]?>  
            <?php endif; ?>
        </li>
      </div>
      <div class="faceInput" style="top:20px; left:1330px;">
        <li class="nav-item" >
          <a href="controllerSalirRBAC.php" style="color:#fff;">Salir</a>
        </li>
      </div>
    </ul>      
  </h5> 


<div class="card ex1 absol" style="width: 38rem; top:100px; left:400px;">
  <div class="card-body">
    <h5 class="card-title">Bienvenido</h5>
    <h6 class="card-subtitle mb-2 text-muted">Selecciona alguna opcion: </h6>
    <p class="card-text">
      <?php if (rolUsuario($_SESSION["usuarioC"]) == 'Cliente'): ?>
        <?php  echo privilegios('Cliente'); ?>
      <?php elseif(rolUsuario($_SESSION["usuarioC"]) == 'Empleado'): ?>
          <?php echo privilegios( 'Empleado'); ?>
      <?php else: ?>
          <?php echo privilegios('Administrador'); ?>
      <?php endif; ?>
    </p>
  </div>
</div>


 



  </div>
</div>


</div>
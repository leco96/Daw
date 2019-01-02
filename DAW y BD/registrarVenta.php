<div>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="InputVendedor">Vendedor</label>
      <input type="text" class="form-control" id="InputVendedor" placeholder="Ej. Juan Perez" onkeyup="sendRequest()">
      <div id="ajaxResponse"></div>
    </div>
    <div class="form-group col-md-6">
      <label for="InputCliente">Cliente</label>
      <input type="text" class="form-control" id="InputCliente" placeholder="Cemento APASCO" onkeyup="sendRequest2()">
      <div id="ajaxResponse2"></div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
       	<label for="datepicker">Fecha</label>
		<input type="text" class="form-control " id="datepicker" >
    </div>
    <div class="form-group col-md-4">
      	<label for="InputCantidad">Cantidad de Consumo</label>
		<input type="text" class="form-control" id="InputCantidad" placeholder="Ej. 8">
    </div>
  </div>
  <div class="form-group">
    <label for="InputObservaciones">Observaciones</label>
    <input type="text" class="form-control" id="InputObservaciones" placeholder="Comentario...">
  </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-primary" id="submit_venta">Registrar</button>
</form>
</div>

<script type="text/javascript" src="ajax.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
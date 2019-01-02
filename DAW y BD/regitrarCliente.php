<div>
  <h1>Registrar Cliente</h1>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="InputNombreCliente">Nombre</label>
      <input type="text" class="form-control" id="InputNombreCliente" placeholder="Ej. Juan Perez">
    </div>
    <div class="form-group col-md-6">
      <label for="InputMunicipio">Municipio</label>
      <input type="text" class="form-control" id="InputMunicipio" placeholder="Apaseo el Grande">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
       	<label for="InputCapacidad">Capacidad de Tanque</label>
		<input type="text" class="form-control " id="InputCapacidad" >
    </div>
    <div class="form-group col-md-4">
        <label for="InputClave">Clave tanque</label>
    <input type="text" class="form-control " id="InputClave" >
    </div>
    <div class="form-group col-md-4">
        <label for="InputContrata">Contrata Tanque</label>
        <select class="form-control" id="InputContrata">
          <option>true</option>
          <option>false</option>
        </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" id="submit_Cliente">Registrar Cliente</button>
</form>
</div>

<br>
<br>

<div>
<h1>Registrar Vendedor</h1>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="InputNombreVendedor">Nombre</label>
      <input type="text" class="form-control" id="InputNombreVendedor" placeholder="Ej. Juan Perez">
    </div>
    <div class="form-group col-md-6">
      <label for="InputDomicilio">Domicilio</label>
      <input type="text" class="form-control" id="InputDomicilio" placeholder="Epigmenio Gonzales">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="InputTelefono">Telefono</label>
    <input type="text" class="form-control" id="InputTelefono" placeholder="Ej. 442 342 12">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" id="submit_vendedor">Registrar Vendedor</button>
</form>
</div>
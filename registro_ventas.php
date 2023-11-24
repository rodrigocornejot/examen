<?php include_once "templates/header.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
<div class="mt-5 mx-auto container-form" style="width: 600px;">
	<form method="post" action="controlador/ControladorVenta.php">

		<h2>REGISTRO DE VENTAS</h2>

        <div class="form-group">
			<label for="telefono">TELEFONO </label>
			<input type="text" name="telefono" id="telefono" class="form-control">
		</div>

		<div class="form-group">
			<label for="tipo_plan">TIPO DE PLAN</label>
			<select name="tipo_plan" id="tipo_plan" class="form-select" aria-label="Default select example">
  				<option selected>Seleccione</option>
				<option value="ILIMITADO">ILIMITADO</option>
				<option value="REGULAR">REGULAR</option>
			</select>
		</div>

        <div class="form-group">
			<label for="tip_documento">TIPO DE DOCUMENTO</label>
			<select name="tip_documento" id="tip_documento" class="form-select" aria-label="Default select example">
  				<option selected>Seleccione</option>
				<option value="DNI">DNI</option>
				<option value="RUC">RUC</option>
                <option value="CE">CE</option>
                <option value="Pasaporte">Pasaporte</option>
			</select>
		</div>

		<div class="form-group">
			<label for="nro_documento">NRO DE DOCUMENTO</label>
			<input type="text" name="nro_documento" id="nro_documento" class="form-control"> 
		</div>

		<div class="form-group">
			<label for="nombres">NOMBRES </label>	
			<input type="text" name="nombres" id="nombres" class="form-control">
		</div>

		<div class="form-group">
			<label for="apellidos">APELLIDOS: </label>
			<input type="text" name="apellidos" id="apellidos" class="form-control">
		</div>
		
        <div class="form-group">
			<label for="nivel_1">NIVEL 1</label>
			<select name="nivel_1" id="nivel_1" class="form-select" aria-label="Default select example">
  				<option selected>Seleccione</option>
				<option value="Contacto Efectivo">Contacto Efectivo</option>
				<option value="Contacto No Efectivo">Contacto No Efectivo</option>
			</select>
		</div>

        <div class="form-group">
			<label for="nivel_2">NIVEL 2</label>
			<select name="nivel_2" id="nivel_2" class="form-select" aria-label="Default select example">
  				<option selected>Seleccione</option>
				<option value="Venta">Venta</option>
				<option value="Agendado">Agendado</option>
                <option value="No venta">No venta</option>
                <option value="No llamar">No llamar</option>
                <option value="Llamada vicio">Llamada vicio</option>
			</select>
		</div>

        <div class="form-group">
			<label for="nivel_3">NIVEL 3</label>
			<select name="nivel_3" id="nivel_3" class="form-select" aria-label="Default select example">
  				<option selected>Seleccione</option>
				<option value="Acepta upgrade">Acepta upgrade</option>
				<option value="Renovacion de equipo">Renovacion de equipo</option>
                <option value="Acepta upgrade + renovacion de equipo">Acepta upgrade + renovacion de equipo</option>
                <option value="Cliente interesado">Cliente interesado</option>
                <option value="Corta llamada">Corta llamada</option>
                <option value="Plan muy caro">Plan muy caro</option>
                <option value="Buzon">Buzon</option>
                <option value="Cliente no desea recibir llamadas">Cliente no desea recibir llamadas</option>
                <option value="Llamada vacio">Llamada vacio</option>
			</select>
		</div>

        <div class="form-group">
			<label for="n_sn">N SN </label>
			<input type="text" name="n_sn" id="n_sn" class="form-control">
		</div>

        <div class="form-group">
			<label for="activacion_inmediata">ACTIVACION_INMEDIATA</label>
			<select name="activacion_inmediata" id="activacion_inmediata" class="form-select" aria-label="Default select example">
  				<option selected>Seleccione</option>
				<option value="SI">SI</option>
				<option value="NO">NO</option>
			</select>
		</div>

		<div class="form-group">
			<label for="observaciones">OBSERVACIONES </label>
			<textarea name="observaciones" class="form-control" id="observaciones"></textarea>
		</div>

		<input type="submit" value="enviar" class="boton1">
	</form>
</div>
</html>
<?php include_once "templates/footer.php" ?>
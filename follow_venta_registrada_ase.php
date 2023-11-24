<?php include_once "templates/header.php" ?>
<?php #include_once "funciones/administrador.php" ?>

<?php
include 'funciones/conexion.php';


$sql="select * FROM ventas";
$resultado = $conexion->query($sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>SEGUIMIENTO DE VENTAS PENDIENTES</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<div class="container-mt5">
	<table class="table table-light" id="ventas">
		<thead>
			<tr class="table-dark">
				<th>COD VENTA</th>				
                <TH>FECHA</TH>
                <th>CLIENTE</th>
                <th>DOCUMENTO</th>
				<th>ESTADO VENTA</th>
				<th>DETALLE</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($filas = $resultado->fetch_assoc()):?>
			<tr>
				<td><?php echo $filas['id_venta'] ?></td>
                <td><?php echo $filas['fecha'] ?></td>
                <td><?php echo $filas['nombres']; echo $filas['apellidos'];?></td>
                <td><?php echo $filas['nro_documento']?></td>
				<td>PENDIENTE</td>
				<td>DETALLE</td>	
			</tr>
		<?php endwhile?>	
		</tbody>
	</table>	
<?php
include_once "../funciones/conexion.php";

$telefono =$_POST['telefono'];
$tip_documento=$_POST['tip_documento'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$nivel_1=$_POST['nivel_1'];
$nivel_2 = $_POST['nivel_2'];
$nivel_3 = $_POST['nivel_3'];
$n_sn = $_POST['n_sn'];
$observaciones = $_POST['observaciones'];
$tipo_plan = $_POST['tipo_plan'];
$nro_documento = $_POST['nro_documento'];
$fecha = date('Y-m-d');
$activacion_inmediata = $_POST['activacion_inmediata'];

$sql="insert into ventas (telefono, tip_documento, nombres, apellidos, nivel_1, nivel_2, nivel_3, n_sn, observaciones, tipo_plan, nro_documento, activacion_inmediata,fecha)  values (?,?,?,?,?,?,?,?,?,?,?,?,?) ";
$stmt=$conexion->prepare($sql);
$stmt->bind_param("issssssssssss",$telefono,$tip_documento,$nombres,$apellidos,$nivel_1,$nivel_2,$nivel_3,$n_sn,$observaciones,$tipo_plan,$nro_documento,$activacion_inmediata,$fecha);
// Ejecutar la sentencia preparada
$stmt->execute();

// Cerrar la conexión y liberar recursos
$stmt->close();
$conexion->close();
?>		

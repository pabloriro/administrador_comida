<?php  

include("conectar.php");

$nombebi = $_POST['nom_bebida'];
$fotobebi = addslashes(file_get_contents($_FILES['foto_bebida']['tmp_name']));
$preciobebi = $_POST['pre_bebida'];
$admin = $_POST['admin_bebida'];

if ($nombebi=="" || $fotobebi=="" || $preciobebi=="" || $admin=="") {

	header('Location:../admin/mensajes_admin/mensaje_beb_noagregado.php');
	
}else{

$sql = "INSERT INTO agregar_bebida (nombre, precio, fecha, id_administrador, foto) VALUES ('$nombebi', '$preciobebi', NOW(), '$admin', '$fotobebi')";

$result = $conn->query($sql);

if ($result) 
{
	header('Location:../admin/mensajes_admin/mensaje_beb_agregado.php');
}else{
	header('Location:../admin/mensajes_admin/mensaje_beb_noagregado.php');
}

$conn->close(); 
}
?>
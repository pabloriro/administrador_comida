<?php  

include("conectar.php");

$nomcom = $_POST['nom_comida'];
$procom = $_POST['pro_comida'];
$vercom = $_POST['ver_comida'];
$enscom = $_POST['ens_comida'];
$acomcom = $_POST['aco_comida'];
$fotocom = addslashes(file_get_contents($_FILES['foto_comida']['tmp_name']));
$preciocom = $_POST['pre_comida'];
$admin = $_POST['admin_comida'];

if ($nomcom=="" || $procom=="" || $vercom=="" || $enscom=="" || $acomcom=="" || $fotocom=="" || $preciocom=="" || $admin=="") {

	header('Location:../admin/mensajes_admin/mensaje_plato_noagregado.php');
	
}else{

$sql = "INSERT INTO agregar_comida (nombre, fecha, proteinas, verduras, ensaladas, acompanamientos, id_administrador, foto, precio) VALUES ('$nomcom', NOW(), '$procom', '$vercom', '$enscom', '$acomcom', '$admin', '$fotocom', '$preciocom')";

$result = $conn->query($sql);

if ($result) 
{
	header('Location:../admin/mensajes_admin/mensaje_plato_agregado.php');
}else{
	header('Location:../admin/mensajes_admin/mensaje_plato_noagregado.php');
}

$conn->close(); 
}
?>
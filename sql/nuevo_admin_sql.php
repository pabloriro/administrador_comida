<?php  

include("conectar.php");

$nomadmin = $_POST['nom_admin'];
$apadmin = $_POST['ap_admin'];
$mailadmin = $_POST['mail_admin'];
$conadmin = $_POST['con_admin'];
$reconadmin = $_POST['recon_admin'];
$rutadmin = $_POST['rut_admin'];
$caradmin = $_POST['car_admin'];
$fonoadmin = $_POST['fono_admin'];

if ($conadmin!==$reconadmin) 
{
	header('Location:../admin/mensajes_admin/mensaje_nuevo_no_admin.php');

	
}else{
if ($nomadmin=="" || $apadmin=="" || $mailadmin=="" || $conadmin=="" || $reconadmin=="" || $rutadmin=="" || $caradmin=="" || $fonoadmin=="") {

	header('Location:../admin/mensajes_admin/mensaje_nuevo_no_admin.php');
	
}else{

$sql = "INSERT INTO administrador (nombre, apellido, rut, cargo, email, telefono, contrasena) VALUES ('$nomadmin', '$apadmin', '$rutadmin', '$caradmin', '$mailadmin', '$fonoadmin', '$conadmin')";

$result = $conn->query($sql);

if ($result) 
{
	header('Location:../admin/mensajes_admin/mensaje_nuevo_admin.php');
}else{
	header('Location:../admin/mensajes_admin/mensaje_nuevo_no_admin.php');

}

$conn->close(); 
}
}
?>
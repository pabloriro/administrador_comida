<?php
include("conectar.php");

$mailadmin = $_POST['mail_admin'];
$contra = $_POST['con_admin'];


if ($mailadmin=="" || $contra=="") 
{
	header('Location:../admin/mensajes_admin/mensaje_no_ingreso.php');
}
else
{

$sql = "SELECT email, contrasena FROM administrador where email = '$mailadmin' and contrasena = '$contra'";

$result = $conn->query($sql);

if ($result) 
{
	header('Location:../admin/directorio_admin.php');
}else{
	header('Location:../admin/mensajes_admin/mensaje_no_ingreso.php');

}

$conn->close(); 
}

?>

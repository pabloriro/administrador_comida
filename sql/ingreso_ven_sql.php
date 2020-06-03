<?php
include("conectar.php");

$mail = $_POST['mail_empl'];
$contra = $_POST['con_empl'];


if ($mail=="" || $contra=="") 
{
	header('Location:../empleado/mensajes_empl/mensaje_no_ingreso.php');
}
else
{

$sql = "SELECT email, contrasena FROM vendedor where email = '$mail' and contrasena = '$contra'";

$result = $conn->query($sql);

if ($result) 
{
	header('Location:../empleado/mostrarpedido_empl.php');
}else{
	header('Location:../empleado/mensajes_empl/mensaje_no_ingreso.php');

}

$conn->close(); 
}

?>

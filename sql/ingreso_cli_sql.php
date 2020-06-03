<?php
include("conectar.php");

$mail = $_POST['mail_cli'];
$contra = $_POST['con_cli'];


if ($mail=="" || $contra=="") 
{
	header('Location:../cliente/mensajes_cli/mensaje_noingreso_cli.php');
}
else
{

$sql = "SELECT email, contrasena FROM cliente where email = '$mail' and contrasena = '$contra'";

$result = $conn->query($sql);

if ($result) 
{
	header('Location:../cliente/pedido_cli.php');
}else{
	header('Location:../cliente/mensajes_cli/mensaje_noingreso_cli.php');

}

$conn->close(); 
}

?>

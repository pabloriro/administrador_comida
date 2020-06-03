<?php  

include("conectar.php");

$nomcli = $_POST['nom_cli'];
$apcli = $_POST['ap_cli'];
$mailcli = $_POST['mail_cli'];
$concli = $_POST['con_cli'];
$reconcli = $_POST['recon_cli'];
$rutcli = $_POST['rut_cli'];
$dircli = $_POST['dir_cli'];
$fonocli = $_POST['fono_cli'];

if ($concli!==$reconcli) 
{
	header('Location:../cliente/mensajes_cli/mensaje_no_nuevo_cli.php');

	
}else{
if ($nomcli=="" || $apcli=="" || $mailcli=="" || $concli=="" || $reconcli=="" || $rutcli=="" || $dircli=="" || $fonocli=="") {

	header('Location:../cliente/mensajes_cli/mensaje_no_nuevo_cli.php');
	
}else{

$sql = "INSERT INTO cliente (nombre, apellido, telefono, direccion, email, rut, contrasena) VALUES ('$nomcli', '$apcli', '$fonocli', '$dircli', '$mailcli', '$rutcli', '$concli')";

$result = $conn->query($sql);

if ($result) 
{
	header('Location:../cliente/mensajes_cli/mensaje_nuevo_cli.php');
}else{
	header('Location:../cliente/mensajes_cli/mensaje_no_nuevo_cli.php');

}

$conn->close(); 
}
}
?>
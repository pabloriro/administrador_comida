<?php  

include("conectar.php");

$nomven = $_POST['nom_empl'];
$apven = $_POST['ap_empl'];
$mailven = $_POST['mail_empl'];
$conven = $_POST['con_empl'];
$reconven = $_POST['recon_empl'];
$rutven = $_POST['rut_empl'];
$dirven = $_POST['dir_empl'];
$fonoven = $_POST['fono_empl'];

if ($conven!==$reconven) 
{
	header('Location:../empleado/mensajes_empl/mensaje_nuevo_no_empl.php');
	
}else{
if ($nomven=="" || $apven=="" || $mailven=="" || $conven=="" || $reconven=="" || $rutven=="" || $dirven=="" || $fonoven=="") {

	header('Location:../empleado/mensajes_empl/mensaje_nuevo_no_empl.php');
	
}else{

$sql = "INSERT INTO vendedor (nombre, apellido, rut, cargo, email, telefono, direccion, contrasena) VALUES ('$nomven', '$apven', '$rutven', 'Vendedor', '$mailven', '$fonoven', '$dirven', '$conven')";

$result = $conn->query($sql);

if ($result) 
{
	header('Location:../empleado/mensajes_empl/mensaje_nuevo_empl.php');
}else{
	header('Location:../empleado/mensajes_empl/mensaje_nuevo_no_empl.php');

}

$conn->close(); 
}
}
?>
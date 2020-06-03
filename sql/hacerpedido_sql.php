<?php  

include("conectar.php");

$mailcli = $_POST['cli_mail'];
$comicli = $_POST['cli_comida'];
$cantcom = $_POST['cant_comida'];
$bebicli = $_POST['cli_bebida'];
$cantbebi = $_POST['cant_bebida'];


if ($mailcli=="" || $comicli=="" || $cantcom=="" || $bebicli=="" || $cantbebi=="") {

	header('Location:../cliente/mensajes_cli/mensaje_no_pedido_cli.php');
	
}else{

$sql = "INSERT INTO pedidos (id_usuario, fecha, id_comida, cantidad_comida, id_bebida, cantidad_bebida) VALUES ('$mailcli', NOW(), '$comicli', '$cantcom', '$bebicli', '$cantbebi')";

$result = $conn->query($sql);

if ($result) 
{
	header('Location:../cliente/mensajes_cli/mensaje_pedido_cli.php');
}else{
	header('Location:../cliente/mensajes_cli/mensaje_no_pedido_cli.php');
}

$conn->close(); 
}
?>
<?php  

include("../sql/conectar.php");

?>
<html>
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<title></title>
</head>
<body background="../imagenes/fondo.jpg" style="font-family: Arial, Helvetica, sans-serif" text="Arial">
<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top; text-align: center;">
<h1>Santiago Food</h1>
</td>
<td style="vertical-align: top;"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top;"><br>
<form method="post" action="../sql/agregar_bebida_sql.php" name="bebida_admin" enctype="multipart/form-data">
<table style="text-align: left; width: 100px;" aling="center" border="0" cellpadding="2" cellspacing="2" align="center">
<tbody>
<tr>
<td style="vertical-align: top;" align="center"><h3>Agregar Bebida</h3><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">Nombre: <input maxlength="40" size="40" name="nom_bebida"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">Foto: <input maxlength="40" size="40" name="foto_bebida" value="Foto" type="file"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">Precio: <input maxlength="40" size="40" name="pre_bebida"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;">Administrador: 
<select name="admin_bebida">
	<option value="0">seleccione</option>
        <?php
        $sql = "SELECT * FROM administrador";
        $query = $conn->query($sql);
        while ($valores = mysqli_fetch_array($query)) {
        	echo '<option value="'.$valores[id_administrador].'">'.$valores[apellido].'</option>';
        }

        ?>
</select><br><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><center><input name="guardar" value="Guardar" type="submit"></center>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><center><a href="directorio_admin.php"><input name="volver" value="Volver a Administrador" type="button"></a></center>
</td>
</tr>
</tbody>
</table>
</form>
<br>
</td>
<td style="vertical-align: top;"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top;"><br>
</td>
</tr>
</tbody>
</table>
<br>
<br>
</body>
</html>
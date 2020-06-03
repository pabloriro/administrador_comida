<?php  

include("../sql/conectar.php")

?>
<html>
<head>
<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">
<title></title>
</head>
<body background="../imagenes/fondo.jpg" style="font-family: Arial, Helvetica, sans-serif" text="Arial">
<table style="text-align: left; width: 100%;" border="0" cellpadding="2"
cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top; text-align: center;">
<h1>Mira nuestros platos y haz tu pedido</h1>
</td>
<td style="vertical-align: top;"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top;"><br>
<center>
<table border="1" bgcolor="yellow">
              <thead>
              <tr>
                <th>Nombre del plato</th>
                <th>Proteina</th>
                <th>Verduras</th>
                <th>Acompañamiento</th>
                <th>Ensalada</th>
                <th>Foto</th>
                <th>Precio</th>
                </tr>
             </thead>
             <tbody>
              <?php  
            
               $sql= "SELECT * FROM agregar_comida";

               $resultado = $conn->query($sql);

               while ($row=$resultado->fetch_assoc()) {

              ?>
                <tr>
                  <td><?php echo $row['nombre'];  ?></td>
                  <td><?php echo $row['proteinas'];  ?></td>
                  <td><?php echo $row['verduras'];  ?></td>
                  <td><?php echo $row['acompanamientos'];  ?></td>
                  <td><?php echo $row['ensaladas'];  ?></td>
                  <td><img style="width: 200px; height: 140px;" src="data:image/png;base64, <?php echo base64_encode($row['foto']);  ?>"</td>
                  <td><?php echo $row['precio'];  ?></td>
                </tr>
               <?php  
               }


               ?>
               </tbody>
            </table>
          </center>
<br>
</td>
<td style="vertical-align: top;"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top;"><br>
	<center><h1>Ver Bebidas</h1></center>
  <center>
  <table border="1" bgcolor="yellow">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Precio</th>
                </tr>
             </thead>
             <tbody>
              <?php  
            
               $sql= "SELECT * FROM agregar_bebida";

               $resultado = $conn->query($sql);

               while ($row=$resultado->fetch_assoc()) {

              ?>
                <tr>
                  <td><?php echo $row['nombre'];  ?></td>
                  <td><img style="width: 200px; height: 140px;" src="data:image/png;base64, <?php echo base64_encode($row['foto']);  ?>"</td>
                  <td><?php echo $row['precio'];  ?></td>
                </tr>
               <?php  
               }


               ?>
               </tbody>
            </table>
          </center>
<br>
</td>
<td style="vertical-align: top;"><br>
</td>
</tr>
<tr>
	<td>
	</td>
	<td>
		<center><b>¡¡¡Hora de comer!!! Haz tu pedido ahora</b></center>
		<br>
		<center>
			<form action="../sql/hacerpedido_sql.php" method="post" name="pedido">
			<table border="1" bgcolor="yellow">
			<thead>
              <tr>
                <th>Mail Cliente</th>
                <th>Plato</th>
                <th>Cantidad</th>
                <th>Bebida</th>
                <th>Cantidad</th>
              </tr>
             </thead>
             <tbody>
                <tr>
                  <td><select name="cli_mail">
                        <option value="0">seleccione</option>
                              <?php
                              $sql = "SELECT * FROM cliente";
                              $query = $conn->query($sql);
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="'.$valores[id_cliente].'">'.$valores[email].'</option>';
                              }

                              ?>
                      </select></td>
                  <td>
                    <select name="cli_comida">
                        <option value="0">¿Cuál es tu plato preferido?</option>
                              <?php
                              $sql = "SELECT * FROM agregar_comida";
                              $query = $conn->query($sql);
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="'.$valores[id_comida].'">'.$valores[nombre].'</option>';
                              }

                              ?>
                      </select>
                    </td>
                  <td>
                    <select name="cant_comida">
                        <option value="0">¿Cuántos quieres?</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>                              
                      </select>
                  </td>
                  <td>
                    <select name="cli_bebida">
                        <option value="0">¿Con qué bebida acompañas?</option>
                              <?php
                              $sql = "SELECT * FROM agregar_bebida";
                              $query = $conn->query($sql);
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="'.$valores[id_bebida].'">'.$valores[nombre].'</option>';
                              }

                              ?>
                      </select>
                    </td>
                  <td>
                    <select name="cant_bebida">
                        <option value="0">¿Cuántas quieres?</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>                              
                      </select>
                  </td>
                </tr>
				</tbody>
			</table>
			<br><input type="submit" name="hacer_pedido" value="Hacer Pedido">
			</form>
		</center>

	</td>
	<td>
	</td>
</tr>
<tr>
<td style="vertical-align: top;">
</td>
<td style="vertical-align: top;">
	
</td>
<td style="vertical-align: top;">
</td>
</tr>
</tbody>
</table>
<center><a href="mostrar_pedido_cli.php"><input type="button" name="ver_pedido" value="Ver Pedido"></a></center>
<br>
<center><a href="../index.html"><input type="button" name="salir" value="Salir"></a></center>
</body>
</html>
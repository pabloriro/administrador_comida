<?php  

include("../sql/conectar.php");

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
<h1>Tu pedido es:</h1>
</td>
<td style="vertical-align: top;"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top;">
<center>
<table border="1" bgcolor="yellow">
              <thead>
              <tr>
                
                <th>Plato</th>
                <th>Cantidad Plato</th>
                <th>Bebidas</th>
                <th>Cantidad Bebidas</th>
                <th>Valor total</th>
                <th>Gasto de Envío</th>
              </tr>
             </thead>
              <tbody>
                  <tr>
                  
              <?php  
            
               $sql= "SELECT agregar_comida.nombre as 'plato', pedidos.cantidad_comida as 'cantidad_plato', agregar_bebida.nombre as 'bebidas', pedidos.cantidad_bebida as 'cantidad_bebidas', ((agregar_comida.precio)*(pedidos.cantidad_comida)+(agregar_bebida.precio)*(pedidos.cantidad_bebida)) as 'precio_total' from (((pedidos inner join agregar_comida on agregar_comida.id_comida = pedidos.id_comida) inner join agregar_bebida on agregar_bebida.id_bebida = pedidos.id_bebida) inner join cliente on cliente.id_cliente = pedidos.id_usuario) where pedidos.id_pedido=1";

               $resultado = $conn->query($sql);

               while ($row=$resultado->fetch_assoc()) {

              ?>
                
                  <td><?php echo $row['plato'];  ?></td>
                  <td><?php echo $row['cantidad_plato'];  ?></td>
                  <td><?php echo $row['bebidas'];  ?></td>
                  <td><?php echo $row['cantidad_bebidas'];  ?></td>
                  <td><?php echo $row['precio_total'];  ?></td>
                  <td>3000</td>
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
  <center><a href="pedido_cli.php"><input type="button" name="agregar" value="Hacer otro pedido"></a></center><br>
  <center><a href="../index.html"><input type="button" name="salir" value="Salir"></a></center><br>
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
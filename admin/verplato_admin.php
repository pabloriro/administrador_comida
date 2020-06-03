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
<h1>Ver platos</h1>
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
<br>
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

  <center><a href="directorio_admin.php"><input type="button" name="agregar" value="Volver Administrador"></a></center><br>
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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
	<link rel="stylesheet" href="estilo.css">
  	<link rel="stylesheet" href="estilo2.css">
      <nav>
      				<ul class="nav navbar-nav">
                <li><a href="index.php">P&aacutegina Principal</a></li>
                <li><a href="agregarUsuarioinfo.php">Registrar</a></li>
      					<li><a href="login.php">Iniciar sesi&oacuten</a></li>
      				</ul>
      	</nav>





 <form method="post" action="registroProducto.php">
   <input type="text" name="codigo"  align="center" size="50" placeholder="Codigo del producto" disabled="disabled"><br><br>
   <input type="text" name="nombre"  align="center" size="50" placeholder="Ingrese un nuevo producto"><br><br>
   <input type="text" name="cantidad" align="center" size="50" placeholder="cantida del producto"><br><br>
   <input type="text" name="precio" align="center" size="50" placeholder="Precio del producto"><br><br>
   <input type="submit" value="Registrar">
 </form>
  </body>
</html>

<?php
$conexion=mysqli_connect("localhost","root","","encriptarBlowfish") or
        die("Problemas en la conexión");
        mysqli_query($conexion,"INSERT INTO producto(id_Codigo,nombre_producto,cantidad,precio)
        values('$_REQUEST[codigo]','$_REQUEST[nombre]','$_REQUEST[cantidad]','$_REQUEST[precio]')")or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);

$mensaje = "El producto fue agregado de manera satisfactoria";
echo "<script>";
echo "alert('$mensaje');";
echo "window.location = 'index.php';";
echo "</script>";

 ?>

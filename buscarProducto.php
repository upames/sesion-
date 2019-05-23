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





 <form method="post" action="buscarProducto.php">
   <input type="text" name="codigo"  align="center" size="50" placeholder="Codigo"><br><br>
   <input type="submit" value="buscar">

 </form>
  </body>
</html>

<?php

$consulta = "SELECT * FROM producto WHERE id_Codigo='$_REQUEST[codigo]'";

$conexion=mysqli_connect("localhost","root","","encriptarBlowfish") or
        die("Problemas en la conexión");
        $respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));
        $passwordCifrado= mysqli_fetch_array($respuesta);

$contra = $passwordCifrado[0];


        if($contra==""){
          $mensaje = "No existe el producto";
          echo "<script>";
          echo "alert('$mensaje');";
          echo "window.location = 'index.php';";
          echo "</script>";
        }else {
          $mensaje = "Nombre: ".$passwordCifrado[1]." Cantidad: ".$passwordCifrado[2]." Precio: ".$passwordCifrado[3];
          echo "<script>";
          echo "alert('$mensaje');";
          echo "window.location = 'index.php';";
          echo "</script>";
        }
mysqli_close($conexion);




 ?>

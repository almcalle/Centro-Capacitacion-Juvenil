<?php
require 'conexion.php';
$id = $_POST['id'];

//ELIMINAMOS LA FICHA

mysqli_query($conn,"DELETE FROM ficha  WHERE identidad = '$id'");

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS
mysqli_close($conn);
echo '<script type="text/javascript">alert("Ficha borrada");</script>';
echo "<script>window.location = 'menu.php'</script>";
?>

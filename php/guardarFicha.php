<?php
	$identidad = $_POST["identidad"];
	$nombre = $_POST["nombre"];
	$fecha_nacimiento = $_POST["fecha_nacimiento"];
	$edad = $_POST["edad"];
	$lugarNacimiento = $_POST["lugarNacimiento"];
	$sexo = $_POST["sexo"];
	$direccion = $_POST["direccion"];
	$proyecto_actual = $_POST["proyecto_actual"];
	$proyectos_pasados = $_POST["proyectos_pasados"];
	$telefono = $_POST["telefono"];
	$categoria = $_POST["categoria"];
	$grupo = $_POST["grupo"];
	$hijos = $_POST["hijos"];
	$numero_hijos = $_POST["numero_hijos"];
	// $imagen_portada = $_FILES['imagen']['name'];
	$d=mt_rand(1,10000);
if (isset($_POST['identidad']) and isset($_POST['nombre'])) {


		require "conexion.php";
		$consulta = mysqli_query("select identidad from ficha where identidad='".$identidad."'")or die(mysql_error());
		$id = mysql_num_rows($consulta);
		if ($id==0){

			mysqli_query("insert into ficha(identidad,nombre,fecha_nacimiento,edad,lugarNacimiento,sexo,direccion,proyecto_actual,proyectos_pasados,telefono,categoria,grupo,hijos,numero_hijos) values('".$identidad."','".$nombre."','".$fecha."','".$edad."','".$fecha_nacimiento."','".$edad."','".$lugarNacimiento."','".$sexo."','".$direccion."','".$proyecto_actual."','".$proyectos_pasados."','".$telefono."','".$categoria."','".$grupo."','".$hijos."','".$numero_hijos."'") or die(mysql_error());
			echo '<script type="text/javascript">alert("Ficha Guardada");</script>';
			echo "<script>window.location = '../detalleFicha.php?id=".$identidad."'</script>";
		}
		else {
			echo '<script type="text/javascript">alert("El No. de identidad ya se encuentra registrado");</script>';
			echo "<script>window.location = '../nuevaFicha.php'</script>";
		}
		mysqli_close();
}
?>

<?php
	$identidad = $_POST["identidad"];
	$nombre = $_POST["nombre"];
	$fecha_nacimiento = $_POST["fecha_nacimiento"];
	$lugar_nacimiento = $_POST["lugar_nacimiento"];
	$sexo = $_POST["sexo"];
	$direccion = $_POST["direccion"];
	$proyecto_actual = $_POST["proyecto_actual"];
	$proyectos_pasados = $_POST["proyectos_pasados"];
	$telefono = $_POST["telefono"];
	$categoria = $_POST["categoria"];
	$grupo = $_POST["grupo"];
	$hijos = $_POST["hijos"];
	$numero_hijos = $_POST["numero_hijos"];
	$nivel = $_POST["nivel"];
	$centro_educativo = $_POST["centro_educativo"];
	$cuenta = $_POST["cuenta"];
	$carrera = $_POST["carrera"];
	$inicio_carrera = $_POST["inicio_carrera"];
	$promedio_inicial = $_POST["promedio_inicial"];
	$sangre = $_POST["sangre"];
	$peso = $_POST["peso"];
	$enfermedades = $_POST["enfermedades"];
	$medicamentos = $_POST["medicamentos"];
	$operaciones = $_POST["operaciones"];
	$nombre_madre = $_POST["nombre_madre"];
	$telefono_madre = $_POST["telefono_madre"];
	$ocupacion_madre = $_POST["ocupacion_madre"];
	$categoria_madre = $_POST["categoria_madre"];
	$nombre_padre = $_POST["nombre_padre"];
	$telefono_padre = $_POST["telefono_padre"];
	$ocupacion_padre = $_POST["ocupacion_padre"];
	$categoria_padre = $_POST["categoria_padre"];
	$vive_padres = $_POST["vive_padres"];
	$encargado = $_POST["encargado"];
	$numero_hermanos= $_POST["numero_hermanos"];
	$lugar_que_ocupa = $_POST["lugar_que_ocupa"];
	$tipo_vivienda = $_POST["tipo_vivienda"];
	$piso_de = $_POST["piso_de"];
	$religion = $_POST["religion"];
	// $imagen_portada = $_FILES['imagen']['name'];
	$d=mt_rand(1,10000);
if (isset($_POST['identidad']) and isset($_POST['nombre'])) {
//for para variables de selct multiple: proyectos pasados, proyecto actual
$proyecto_actualDB="";
	for ($i=0;$i<count($proyecto_actual);$i++){
		if($proyecto_actualDB!=""){
  		$proyecto_actualDB=$proyecto_actualDB.", ".$proyecto_actual[$i];
		}else{
			$proyecto_actualDB=$proyecto_actual[$i];
		}

		}
		$proyectos_pasadosDB="";
			for ($i=0;$i<count($proyectos_pasados);$i++){
				if($proyectos_pasadosDB!=""){
		  		$proyectos_pasadosDB=$proyectos_pasadosDB.", ".$proyectos_pasados[$i];
				}else{
					$proyectos_pasadosDB=$proyectos_pasados[$i];
				}

				}
	//fin de for para variables de select multiple


		require "../conexion.php";
		$consulta = mysqli_query($conn,"select identidad from ficha where identidad='".$identidad."'")or die(mysqli_error($conn));
		$id = mysqli_num_rows($consulta);
		if ($id==0){

			mysqli_query($conn,"insert into ficha (identidad,nombre,fecha_nacimiento,lugar_nacimiento,sexo,direccion,proyecto_actual,proyectos_pasados,telefono,categoria,grupo,hijos,numero_hijos,nivel,centro_educativo,cuenta,carrera,inicio_carrera,promedio_inicial,sangre,peso,enfermedades,medicamentos,operaciones,nombre_madre,telefono_madre,ocupacion_madre,categoria_madre,nombre_padre,telefono_padre,ocupacion_padre,categoria_padre,vive_padres,encargado,numero_hermanos,lugar_que_ocupa,tipo_vivienda,piso_de,religion)
values('".$identidad."','".$nombre."','".$fecha_nacimiento."','".$lugar_nacimiento."','".$sexo."','".$direccion."','".$proyecto_actualDB."','".$proyectos_pasadosDB."','".$telefono."','".$categoria."','".$grupo."','".$hijos."','".$numero_hijos."','".$nivel."','".$centro_educativo."','".$cuenta."','".$carrera."','".$inicio_carrera."','".$promedio_inicial."','".$sangre."','".$peso."','".$enfermedades."','".$medicamentos."','".$operaciones."','".$nombre_madre."','".$telefono_madre."','".$ocupacion_madre."','".$categoria_madre."','".$nombre_padre."','".$telefono_padre."','".$ocupacion_padre."','".$categoria_padre."','".$vive_padres."','".$encargado."','".$numero_hermanos."','".$lugar_que_ocupa."','".$tipo_vivienda."','".$piso_de."','".$religion."')") or die(mysqli_error($conn));
			echo '<script type="text/javascript">alert("Ficha Guardada");</script>';
			echo "<script>window.location = '../../detalleFicha.php?id=".$identidad."'</script>";
		}
		else {
			echo '<script type="text/javascript">alert("El No. de identidad ya se encuentra registrado");</script>';
			echo "<script>window.location = '../../nuevaFicha.php'</script>";
		}
		mysqli_close($conn);
}
?>

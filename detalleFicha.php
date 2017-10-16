<?php
require 'php/requerirUsuario.php';
include 'include/head.inc';
require 'php/conexion.php';
?>

      <div class="wrapper">
      <?php
      include 'include/menu.inc';
      ?>

      <div class="content-wrapper">
        <section class="content-header">

        <h1>
        Ficha del alumno
        <small>Detalle de ficha</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li>Ficha del alumno</li>
        <li class="active">Detalle ficha del alumno</li>
        </ol>
        </section> <!-- termina el section class content-header-->

        <section class="content">
        <div class="row">

            <?php

$identidad = $_GET['id'];
// Estoy dentro de php por eso comento con //
//$conn está definido dentro de conexion.php y como se requiere dentro por eso no funciona
$registro = mysqli_query($conn,"select * from ficha where identidad='".$identidad."'");
$reg = mysqli_num_rows($registro);
if ($reg==0) {
    echo"
    <div class=\"col-lg-12\">
    <div class=\"alert alert-block alert-info\">
	<h4>¡Lo sentimos!</h4>El Registro con ID ".$identidad." no fue encontrado. <a href='nuevaFicha.php'>¿Registrar una nueva ficha?</a>
	</div></div>";
}
else {
    $Ficha = mysqli_fetch_array($registro);
    //CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX ?>
<!-- Hacemos un <div class="col-lg-6"> para datos generales -->
<div class="col-lg-6">
<div class="box box-warning">

<div class="box-header with-border">
  <i class="glyphicon glyphicon-pencil"></i>
  <h3 class="box-title">DATOS GENERALES</h3>
</div> <!-- fin <div class="box-header with-border"> -->

  <div class="box-body">

	<br/>
	<dl class="dl-horizontal">


        <dt>Numero de identidad:</dt>
        <dd><?php echo $identidad; ?></dd>
        <dt>Nombre y Apellidos:</dt>
        <dd><?php echo $Ficha['nombre']; ?></dd>
        <dt>Fecha de Nacimiento:</dt>
        <dd><?php echo $Ficha['fecha_nacimiento']; ?></dd>
        <dt>Lugar de nacimiento:</dt>
        <dd><?php echo $Ficha['lugar_nacimiento']; ?></dd>
        <dt>Sexo:</dt>
        <dd><?php echo $Ficha['sexo']; ?></dd>
        <dt>Dirección:</dt>
        <dd><?php echo $Ficha['direccion']; ?></dd>
        <dt>Proyecto donde colabora:</dt>
        <dd><?php echo $Ficha['proyecto_actual']; ?></dd>
        <dt>Proyectos donde ha colaborado:</dt>
        <dd><?php echo $Ficha['proyectos_pasados']; ?></dd>
        <dt>Número de telefono:</dt>
        <dd><?php echo $Ficha['telefono']; ?></dd>
        <dt>Categoría:</dt>
        <dd><?php echo $Ficha['categoria']; ?></dd>
        <dt>Grupo de Capacitación:</dt>
        <dd><?php echo $Ficha['grupo']; ?></dd>
        <dt>¿Tiene Hijos?:</dt>
        <dd><?php echo $Ficha['hijos']; ?></dd>
        <dt>Número de hijos:</dt>
        <dd><?php echo $Ficha['numero_hijos']; ?></dd>

      </div> <!-- fin <div class="box-body"> -->
    </div> <!--  fin <div class="box box-warning"> -->
  </div> <!-- fin <div class="col-lg-6">  aplicado a datos generales-->

<div class="col-lg-6"> <!-- aplicado a estudios y salud -->
<div class="box box-warning">

<div class="box-header with-border">
      <i class="glyphicon glyphicon-book"></i>
      <h3 class="box-title">ESTUDIOS</h3>
</div> <!-- fin <div class="box-header with-border"> -->

  <div class="box-body">
        <dt>Nivel:</dt>
        <dd><?php echo $Ficha['nivel']; ?></dd>
        <dt>Centro Educativo:</dt>
        <dd><?php echo $Ficha['centro_educativo']; ?></dd>
        <dt>Número de Cuenta:</dt>
        <dd><?php echo $Ficha['cuenta']; ?></dd>
        <dt>Carrera:</dt>
        <dd><?php echo $Ficha['carrera']; ?></dd>
        <dt>Fecha de inicio de carrera:</dt>
        <dd><?php echo $Ficha['inicio_carrera']; ?></dd>
        <dt>Promedio al entrar al proyecto:</dt>
        <dd><?php echo $Ficha['promedio_inicial']; ?></dd>
  </div> <!-- fin <div class="box-body"> -->
</div> <!--  fin <div class="box box-warning"> -->

 <!-- Falta el fin de class col-lg-6 porque estudios y salud van a la vez a la izquierda ocupando lo
 mismo que datos generales -->

<div class="box box-warning">
<div class="box-header with-border">
  <i class="glyphicon glyphicon-plus"></i>
  <h3 class="box-title">SALUD</h3>
</div>
  <div class="box-body">
        <dt>Tipo de sangre:</dt>
        <dd><?php echo $Ficha['sangre']; ?></dd>
        <dt>Peso (Kilos):</dt>
        <dd><?php echo $Ficha['peso']; ?></dd>
        <dt>Enfermedades que padece:</dt>
        <dd><?php echo $Ficha['enfermedades']; ?></dd>
        <dt>Medicamentos que toma:</dt>
        <dd><?php echo $Ficha['medicamentos']; ?></dd>
        <dt>Operaciones que ha tenido:</dt>
        <dd><?php echo $Ficha['operaciones']; ?></dd>
</div> <!-- fin <div class="box-body"> -->
</div> <!--  fin <div class="box box-warning"> -->
</div> <!-- fin <div class="col-lg-6"> aplicado a estudios y salud -->

<div class="col-lg-12">
<div class="box box-warning">

<div class="box-header with-border">
<i class="glyphicon glyphicon-home"></i>
<h3 class="box-title">INFORMACION FAMILIAR</h3>
</div>

  <div class="box-body">

        <dt>Nombre de la madre:</dt>
        <dd><?php echo $Ficha['nombre_madre']; ?></dd>
        <dt>Número de telefono de la madre:</dt>
        <dd><?php echo $Ficha['telefono_madre']; ?></dd>
        <dt>Ocupación de la madre:</dt>
        <dd><?php echo $Ficha['ocupacion_madre']; ?></dd>
        <dt>Nivel de estudios de la madre:</dt>
        <dd><?php echo $Ficha['categoria_madre']; ?></dd>
        <dt>Nombre del padre:</dt>
        <dd><?php echo $Ficha['nombre_padre']; ?></dd>
        <dt>Número de telefono del padre:</dt>
        <dd><?php echo $Ficha['telefono_padre']; ?></dd>
        <dt>Ocupación del padre:</dt>
        <dd><?php echo $Ficha['ocupacion_padre']; ?></dd>
        <dt>Nivel de estudios del padre:</dt>
        <dd><?php echo $Ficha['categoria_padre']; ?></dd>
        <dt>¿Vive con sus padres?:</dt>
        <dd><?php echo $Ficha['vive_padres']; ?></dd>
        <dt>Encargado/a:</dt>
        <dd><?php echo $Ficha['encargado']; ?></dd>
        <dt>Número de hermanos:</dt>
        <dd><?php echo $Ficha['numero_hermanos']; ?></dd>
        <dt>Lugar que ocupa entre los hermanos:</dt>
        <dd><?php echo $Ficha['lugar_que_ocupa']; ?></dd>
        <dt>Tipo de vivienda:</dt>
        <dd><?php echo $Ficha['tipo_vivienda']; ?></dd>
        <dt>Piso de:</dt>
        <dd><?php echo $Ficha['piso_de']; ?></dd>
        <dt>Religión:</dt>
        <dd><?php echo $Ficha['religion']; ?></dd>
    </div> <!-- fin <div class="box-body"> -->
  </div> <!--  fin <div class="box box-warning"> -->
  </div> <!-- fin <div class="col-lg-12"> aplicado a datos familiares-->




        <dd>* Datos al momento del registro</dd>
    </dl><br/>


    <!--
    <a class="btn btn-app" href="javascript:borrarFicha(<?php echo $identidad; ?>);">
    	<i class="fa fa-bitbucket"></i> Borrar Ficha
    </a>

    <a class="btn btn-app" href="editarFicha.php?id=<?php echo $identidad; ?>">
      <i class="fa fa-edit"></i> Editar Ficha
    </a>
  -->

  <?php
    }

    mysqli_close($conn);
    ?>

</div> <!-- termina <div class="row"> -->
</section><!-- termina la section content -->

</div> <!--  fin del content wrapper-->
</div> <!-- ./fin del wrapper general-->
<!--
<div id="agregar-html-borrado"></div>

<script type="text/javascript">
    function borrarFicha(id){
      debugger;
    var url = 'php/borrarFicha.php';
    var pregunta = confirm('¿Esta seguro de eliminar el Examen?');
    if(pregunta==true){
      $.ajax({
      type:'POST',
      url:url,
      data:'id='+id,
      success: function(registro){
        $('#agregar-html-borrado').html(registro);
      }
    });
    }else{
      return false;
    }
  }
</script>
-->
<?php
include 'include/scripts.inc';
?>
<?php
include 'include/plugins.inc';
include 'include/fin.inc';
?>

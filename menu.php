<?php
require 'php/requerirUsuario.php';
include 'include/head.inc';
include 'include/menu.inc';
?>
      <div class="wrapper">
      <div class="content-wrapper">
      	<section class="content-header">
	          <h1>
	            Centro de Capacitación Juvenil (CCJ)
	            <small>Bienvenido</small>
	          </h1>
	          <ol class="breadcrumb">
	          <li><a href="#">
            <li class="active">Inicio</li>
          </a>
	          </ol>
	    </section>

      <section class="content">

        <section id="tabla_resultado">
                <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
                <!-- Tabla con nombres y apellidos, proyecto en que colabora, nivel academico y categoria -->

                <?php
                require 'php/conexion.php';
                $id = $_POST['id'];


                $fichas = mysqli_query($conn,"SELECT * FROM ficha ") or die(mysqli_error());


              echo '<table id="tabla" class="display" cellspacing="0" width="100%">
                <thead>
                              <tr>
                                 <th width="100">IDENTIDAD</th>
                                 <th width="200">Nombre</th>
                                 <th width="200">Proyecto en que colabora</th>
                                  <th width="200">Nivel academico</th>
                                  <th width="200">Categoría</th>
                                  <th width="100">ACCIONES</th>
                              </tr>
                </thead>
                 <tbody>';




      while($registro = mysqli_fetch_array($fichas)){

      echo'<tr>

                <td>'.$registro['identidad'].'</td>
                <td>'.$registro['nombre'].'</td>
                <td>'.$registro['proyecto_actual'].'</td>
                <td>'.$registro['nivel'].'</td>
                <td>'.$registro['categoria'].'</td>
                <td>
                       <a href="detalleFicha.php?id='.$registro['identidad'].'""
                        class="glyphicon glyphicon-search" data-toggle="tooltip"
                        title="Ver Ficha"></a>
                       &nbsp;&nbsp;&nbsp;

                       <a href="javascript:borrarFicha('.$registro['id'].');"
                        class="glyphicon glyphicon-trash"
                        data-toggle="tooltip" title="Borrar ficha"></a>
                        &nbsp;&nbsp;&nbsp;
                        </td>
                 </tr>';
    }
      echo '</tbody></table>';

      ?>
      </section>
      </section><!-- right col -->
      </div>
      </div><!-- ./wrapper -->
<?php

include 'include/scripts.inc';
include 'include/plugins.inc';
?>

<script src = "js/jquery.dataTables.js" type="text/javascript"></script>
<div id="agregar-html-borrado"></div>
<script type="text/javascript">
    function borrarFicha(id){
		var url = 'php/borrarFicha.php';
		var pregunta = confirm('¿Esta seguro de eliminar la ficha?');
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
<script type="text/javascript">
$(document).ready(function() {
    $('#tabla').DataTable();
} );
</script>
<?php

include 'include/plugins.inc';
include 'include/fin.inc';
?>

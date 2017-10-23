<?php
require 'php/requerirUsuario.php';
include 'include/head.inc';
?>
<div class="wrapper"> <!-- Incluye el menu lateral solamente-->
  <?php
  include 'include/menu.inc';
  ?>
//Mantiene los datos en el campo de busqueda cuando le das a buscar
  <?php
  if (isset($_GET['busqueda']) && isset($_GET['campo'])) {
  require 'php/conexion.php';
  $busqueda = $_GET['busqueda'];
  $campo= $_GET['campo'];
  }
  ?>

<div class="content-wrapper">
    <section class="content-header"> <!-- Incluye la cabecera con Búsqueda -->
        <h1>
        Búsqueda   <!-- Búsqueda titulo grande-->
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Búsqueda</li>     <!-- Inicio-Búsqueda lateral-->
        </ol>
    </section> <!-- fin section class="content-header" -->

    <section class="content">
<!--linea amarilla -->
        <div class="row">
        <div class="col-lg-12">
        <div class="panel panel-warning">

        <div class="panel-heading">
        <h4></h4>
        </div>
<!--fin de linea amarilla -->
<!-- Recuadro de todo debajo de búsqueda titulo -->
        <div class="panel-body">
        <form  id="Busqueda">
        <div class="col-lg-12">
        <div class="box box-solid">
        </div>
        </div>


        <!-- Campo en el que buscar: select con los campos de la tabla ficha -->
              <div class="col-lg-6">
              <div class="form-group">
              <label for="campo">Campo en el que buscar</label>
              <select  id="campo" name="campo" class="form-control">
              <option
              <?php if ($campo=="identidad") {
                          echo "selected=\"selected\"";
                          $tabla="ficha";
                        }?>
                  value="identidad">Número de identidad</option>
              <option
              <?php if ($campo=="nombre") {
                           echo "selected=\"selected\"";
                           $tabla="ficha";
                        }?>
                  value="nombre">Nombre y Apellidos</option>
              <option
              <?php if ($campo=="fecha_nacimiento") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                         }?>
                  value="fecha_nacimiento">Fecha de nacimiento</option>
              <option
              <?php if ($campo=="edad") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                         }?>
                  value ="edad">Edad</option>
                <option
                <?php if ($campo=="lugar_nacimiento") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                         }?>
                  value ="lugar_nacimiento">Lugar de nacimiento</option>
                <option
                <?php if ($campo=="sexo") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="sexo">Sexo</option>
                <option
                <?php if ($campo=="direccion") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="direccion">Dirección</option>
                <option
                <?php if ($campo=="proyecto_actual") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="proyecto_actual">Proyecto donde colabora</option>
                <option
                <?php if ($campo=="proyectos_pasados") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="proyectos_pasados">Proyectos donde ha colaborado</option>
                <option
                <?php if ($campo=="telefono") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="telefono"> Número de teléfono</option>
                <option
                <?php if ($campo=="categoria") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="categoria">Categoría</option>
                <option
                <?php if ($campo=="grupo") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="grupo">Grupo de capacitación</option>
                <option
                <?php if ($campo=="hijos") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="hijos">¿Tiene hijos?</option>
                <option
                <?php if ($campo=="numero_hijos") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="numero_hijos">Número de hijos</option>
                <option
                <?php if ($campo=="nivel") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="nivel">Nivel</option>
                  <option
                <?php if ($campo=="centro_educativo") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="centro_educativo">Centro Educativo</option>
                <option
                <?php if ($campo=="cuenta") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="cuenta">Número de cuenta</option>
                <option
                <?php if ($campo=="carrera") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="carrera">Carrera</option>
                <option
                <?php if ($campo=="inicio_carrera") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="inicio_carrera">Fecha de inicio de carrera</option>
                <option
                <?php if ($campo=="promedio_inicial") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="promedio_inicial">Promedio al entrar al proyecto</option>
                <option
                <?php if ($campo=="sangre") {
                            echo "selected=\"selected\"";
                            $tabla="ficha";
                          }?>
                  value ="sangre">Tipo de sangre</option>
                  <option
                  <?php if ($campo=="peso") {
                              echo "selected=\"selected\"";
                              $tabla="ficha";
                            }?>
                    value ="peso">Peso (Kilos)</option>
                  <option
                  <?php if ($campo=="enfermedades") {
                              echo "selected=\"selected\"";
                              $tabla="ficha";
                            }?>
                    value ="enfermedades">Enfermedades que padece</option>
                  <option
                  <?php if ($campo=="medicamentos") {
                              echo "selected=\"selected\"";
                              $tabla="ficha";
                            }?>
                    value ="medicamentos">Medicamentos que toma</option>
                  <option
                  <?php if ($campo=="operaciones") {
                              echo "selected=\"selected\"";
                              $tabla="ficha";
                            }?>
                    value ="operaciones">Operaciones que ha tenido</option>
                  <option
                  <?php if ($campo=="nombre_madre") {
                              echo "selected=\"selected\"";
                              $tabla="ficha";
                            }?>
                    value ="nombre_madre">Nombre de la madre</option>
                    <option
                    <?php if ($campo=="telefono_madre") {
                                echo "selected=\"selected\"";
                                $tabla="ficha";
                              }?>
                      value ="telefono_madre">Número de telefono de la madre</option>
                    <option
                    <?php if ($campo=="ocupacion_madre") {
                                echo "selected=\"selected\"";
                                $tabla="ficha";
                              }?>
                      value ="ocupacion_madre">Ocupación de la madre</option>
                    <option
                    <?php if ($campo=="categoria_madre") {
                                echo "selected=\"selected\"";
                                $tabla="ficha";
                              }?>
                      value ="categoria_madre"> Nivel de estudios de la madre</option>
                      <option
                      <?php if ($campo=="nombre_padre") {
                                  echo "selected=\"selected\"";
                                  $tabla="ficha";
                                }?>
                        value ="nombre_padre">Nombre del padre</option>
                      <option
                      <?php if ($campo=="telefono_padre") {
                                  echo "selected=\"selected\"";
                                  $tabla="ficha";
                                }?>
                        value ="telefono_padre">Número de telefono del padre</option>
                      <option
                      <?php if ($campo=="ocupacion_padre") {
                                  echo "selected=\"selected\"";
                                  $tabla="ficha";
                                }?>
                        value ="ocupacion_padre">Ocupación del padre</option>
                        <option
                        <?php if ($campo=="categoria_padre") {
                                    echo "selected=\"selected\"";
                                    $tabla="ficha";
                                  }?>
                          value ="categoria_padre">Nivel de estudios del padre</option>
                        <option
                        <?php if ($campo=="vive_padres") {
                                    echo "selected=\"selected\"";
                                    $tabla="ficha";
                                  }?>
                          value ="vive_padres">¿Vive con sus padres?</option>
                        <option
                        <?php if ($campo=="encargado") {
                                    echo "selected=\"selected\"";
                                    $tabla="ficha";
                                  }?>
                          value ="encargado">Encargado/a</option>
                        <option
                        <?php if ($campo=="numero_hermanos") {
                                    echo "selected=\"selected\"";
                                    $tabla="ficha";
                                  }?>
                          value ="numero_hermanos">Número de hermanos</option>
                        <option
                        <?php if ($campo=="lugar_que_ocupa") {
                                    echo "selected=\"selected\"";
                                    $tabla="ficha";
                                  }?>
                          value ="lugar_que_ocupa">Lugar que ocupa entre los hermanos</option>
                        <option
                        <?php if ($campo=="tipo_vivienda") {
                                    echo "selected=\"selected\"";
                                    $tabla="ficha";
                                  }?>
                          value ="tipo_vivienda">Tipo de vivienda</option>
                        <option
                        <?php if ($campo=="piso_de") {
                                    echo "selected=\"selected\"";
                                    $tabla="ficha";
                                  }?>
                          value ="piso_de">Piso de</option>
                        <option
                        <?php if ($campo=="religion") {
                                    echo "selected=\"selected\"";
                                    $tabla="ficha";
                                  }?>
                          value ="religion">Religión</option>
              </select> <!--fin select de campo en el que buscar-->
            </div> <!-- fin de div class="form-group"-->
          </div> <!-- fin de div class="col-lg-6"-->
        <!--  fin Campo en el que buscar: select con los campos de la tabla ficha -->

        <!--  Campo búsqueda en el campo: campo de texto -->
            <div class="col-lg-6">
            <div class="form-group">
	    			<label for="busqueda">Búsqueda en el campo</label>
						<input value="<?php echo $busqueda; ?>" class="form-control"  type="text" name="busqueda" placeholder=""/>
	    			</div>
            </div>
        <!--  fin Campo búsqueda en el campo: campo de texto -->
        <!--botón Búsqueda-->
            <div class="box-body">
            <button id="buscar_boton" class="btn btn-warning btn-flat pull-right">Búsqueda
            </button>
            </div>
          <!--fin botón Búsqueda-->

          </form> <!-- fin de form  id="Busqueda"> -->
          </div> <!-- fin de <div class="panel-body"> //  recuadro que recoge todo  -->
	    		</div> <!-- fin de  <div class="panel panel-warning"> -->
        </div> <!-- fin de <div class="col-lg-12"> -->
</section> <!--fin de </section contenido-->

            <?php
            //función isset-> Determina si una variable está definida y no es NULL:
            //devolverá TRUE únicamente si todos los parámetros están definidos
            //función mysqli_query-> Realiza una consulta dada por query a la base de datos.
            //mysqli_query ( mysqli $link , string $query ) con link=Un identificador de enlace devuelto
            //por mysqli_connect() o mysqli_init() y query =la string de la consulta.
            //mysqli_num_rows recoge el numero de filas devueltas por la consulta query
            //mysqli_fetch_array ( mysqli_result $result)->Retorna un array que corresponde a la fila
            //obtenida o NULL si es que no hay más filas en el resultset representado por el parámetro result.
if (isset($_GET['busqueda']) && isset($_GET['campo'])) {
    $query="SELECT * FROM ".$tabla." WHERE ".$campo." LIKE '%".$busqueda."%'";
    $resultados  = mysqli_query($conn,$query);
    $cuenta= mysqli_num_rows($resultados);
?>

  <div class="box box-warning">
    <div class="box-header with-border">
  <i class="fa fa-search"></i>
  <h3 class="box-title">Resultados</h3>
  </div>
  <div class="box-body">

  <div class="col-lg-12">
<?php
 echo '<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
                 <tr>

                    <th width="100">IDENTIDAD</th>
                    <th width="200">NOMBRE</th>
                    <th width="200">RESULTADO</th>
                    <th width="100">ACCIONES</th>
                  </tr>
                  </thead>
     <tbody>';

    while ($fila = mysqli_fetch_array($resultados)) {
        $consulta = mysqli_query($conn,"select nombre from ficha where identidad='".$fila['identidad']."'") or die(mysqli_error($conn));
        $nombre = mysqli_fetch_array($consulta);
        echo'<tr>
              <td>'.$fila['identidad'].'</td>
              <td>'.$fila['nombre'].'</td>
              <td>'.$fila[$campo].'</td>
              <td><a href="detalleFicha.php?id='.$fila['identidad'].'" class="glyphicon glyphicon-search" data-toggle="tooltip" title="Ver Ficha"></a>&nbsp;&nbsp;&nbsp;
              </tr>';
    }
    echo '</tbody></table>';
} // fin del if
        ?>

      </div> <!-- fin   <div class="col-lg-12"> de resultados-->

      </div> <!-- fin <div class="box-body"> de resultados-->
      </div> <!--  fin <div class="box box-warning"> -->

      </div> <!--fin <div class="row"> -->
      </div> <!-- fin <div class="content-wrapper"> -->
      </div> <!-- fin <div class="wrapper"> -->


  <?php
  include 'include/scripts.inc';
  ?>
  <script src = "js/jquery.dataTables.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#example').DataTable();
  } );
  </script>


  <?php
  include 'include/plugins.inc';
  include 'include/fin.inc';
  ?>

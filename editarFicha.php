<?php
require 'php/requerirUsuario.php';
include 'include/head.inc';
?>
      <div class="wrapper">
      <?php
      include 'include/menu.inc';
      ?>
      <?php
        if (isset($_GET['id']))
        {
        require 'php/conexion.php';
        $buscar = $_GET['id'];
        //BUSCA FICHA
        $registro = mysqli_query($conn,"select * from ficha where identidad='".$buscar."'");
        $Ficha = mysqli_fetch_array($registro);
      }
        ?>
        <div class="content-wrapper">
          <section class="content-header">
          <h1>
          Ficha de registro
          </h1>
          <ol class="breadcrumb">
          <li><a href="menu.php">

             Inicio</a></li>
          <li>Ficha de registro</li>
          <li class="active">Nueva ficha</li>
          </ol>
          </section>
          <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->


          <div class="row">
           <div class="col-lg-12">
            <div class="panel panel-warning">
           <div class="panel-heading">
            <h4></h4>
           </div>
           <div class="panel-body">
               <form role="form" method="POST" action="php/guardar/guardarFicha.php"
               enctype="multipart/form-data"
               id="nuevaFicha">
              <!--MENU DE OPCIONES-->
              <div class="col-lg-12">
            <div class="box box-solid">



            </div>
            <!-- /.box -->
          </div>
              <!--FIN DEL MENU OPCIONES-->
            <!--Fotografia de lo de la clinica
                 <div class="col-lg-12">
              <div class="box box-warning">
                    <div class="box-header with-border">
                      <i class="glyphicon glyphicon-pencil"></i>
                      <h3 class="box-title">FOTOGRAFÍA</h3>
                    </div>

                  <div class="box-body">
                    <div class="form-group">
                                 <input class="btn btn-warning" type="file" name="imagen"/>
                          </div>
                  </div>
                  </div>
                </div>

                -->
      <!--Fotografia de http://www.formacionwebonline.com/guia-para-subir-y-visualizar-imagenes-con-php-y-mysql/
                <form action="cambiodatospersonales.php" enctype="multipart/form-data" method="post">
      <label for="imagen">Imagen:</label>
      <input id="imagen" name="imagen" size="30" type="file" />
      <input type="submit" value="Cambiar datos" />
      </form>
      -->
      <!--Fotografia de optimizado con msqli(creo que iria mejor)
      https://www.lawebdelprogramador.com/codigo/PHP/70-Guardar-y-mostrar-una-imagen-de-una-base-de-datos-MySQL.html
      -->
                <div class="col-lg-6"><!--informacion personal-->
                <div class="box box-warning">
                  <div class="box-header with-border">
              <i class="glyphicon glyphicon-pencil"></i>
              <h3 class="box-title">DATOS GENERALES</h3>
              </div>
              <div class="box-body">
                <div class="form-group">

                  <div class="form-group">
                    <label for="identidad">* Foto</label>

                  <input type="file" name="perfil" accept="image/*" id="perfil">

                  </div>
                  <label for="identidad">* Numero de identidad</label>
                <input class="form-control" maxlength="13" required="required" type="text" name="identidad" placeholder="" onkeypress="return soloNumero(event)"/>
                </div>
                <div class="form-group">
                  <label for="nombre">* Nombre y Apellidos</label>
                  <input  type="text"   name="nombre" maxlength="40" required="required" class="form-control"/>
                </div>

                <div class="col-xs-6">
                  <label for="fecha_nacimiento">* Fecha de nacimiento</label>
                  <div class="input-group">
                    <input onBlur="getAge()" class="form-control" type="text" name="fecha_nacimiento" id="fecha_nacimiento" required="required"/>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  </div>
                </div>
                <div class="col-xs-6">
                  <label for="edad">* Edad</label>
                  <input readonly="readonly" type="number" min="1" max="99" required="required" id="edad" name="edad" class="form-control"/>
                </div>
                <div class="form-group">
                  <label for="lugar_nacimiento">* Lugar de Nacimiento</label>
                  <input type="text" maxlength="39"  required="required" name="lugar_nacimiento" class="form-control" />
                </div>

                <div class="form-group">
                  <label for="sexo">* Sexo</label>
                  <select name="sexo" required="required"  class="form-control">
                    <option selected="selected">
                    <option>Masculino</option>
                    <option>Femenino</option>
                  </select>
                  </div>

                <div class="form-group">
                  <label for="direccion">* Dirección</label>
                  <input  type="text"   name="direccion" maxlength="100" required="required" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="proyecto_actual[]"> Proyecto donde colabora</label>
                  <select  name="proyecto_actual[]" class="form-control select2"  multiple="multiple">
                    <option>Becas San Miguel</option>
                    <option>Centros Infantiles</option>
                    <option>Administración</option>
                    <option>Fiscalia</option>
                    <option>Maestro en Casa</option>
                    <option>Populorum</option>
                    <option>Seguimiento</option>
                    <option>Mantenimiento</option>
                    <option>Capacitaciones</option>
                    <option>Informática</option>
                    <option>Voluntarios extranjeros</option>
                    <option>Santa Mónica</option>
                    <option>San Francisco</option>
                    <option>La Isla</option>
                    <option>La Bolsa</option>
                    <option>Becas</option>
                    <option>Centros Infantiles Ancianos</option>
                    <option>Productividad</option>
                    <option>Cuenta de ayuda</option>
                    <option>Escuela nocturna</option>
                    <option>Catéquesis</option>
                    <option>Psicología</option>
                    <option>Ancianos</option>
                    <option>Mochilas</option>
                    <option>Música</option>
                    <option>San Francisco de Asís</option>
                    <option>San Cristobal</option>
                    <option>San José</option>
                  </select>
                </div>


                <div class="form-group">
                  <label for="proyectos_pasados[]"> Proyectos donde ha colaborado</label>
                  <select name="proyectos_pasados[]" class="form-control select2"  multiple= "multiple">
                    <option>Becas San Miguel</option>
                    <option>Centros Infantiles</option>
                    <option>Administración</option>
                    <option>Fiscalia</option>
                    <option>Maestro en Casa</option>
                    <option>Populorum</option>
                    <option>Seguimiento</option>
                    <option>Mantenimiento</option>
                    <option>Capacitaciones</option>
                    <option>Informática</option>
                    <option>Voluntarios extranjeros</option>
                    <option>Santa Mónica</option>
                    <option>San Francisco</option>
                    <option>La Isla</option>
                    <option>La Bolsa</option>
                    <option>Becas</option>
                    <option>Centros Infantiles Ancianos</option>
                    <option>Productividad</option>
                    <option>Cuenta de ayuda</option>
                    <option>Escuela nocturna</option>
                    <option>Catéquesis</option>
                    <option>Psicología</option>
                    <option>Ancianos</option>
                    <option>Mochilas</option>
                    <option>Música</option>
                    <option>San Francisco de Asís</option>
                    <option>San Cristobal</option>
                    <option>San José</option>

                  </select>
                </div>


                <div class="form-group">
                  <label for="telefono"> Número de telefono</label>
                  <input type="text" maxlength="10"   name="telefono" class="form-control"placeholder="" onkeypress="return soloNumero(event)" />
                </div>

                <div class="form-group">
                  <label for="categoria"> Categoría</label>
                  <select name="categoria" class="form-control select2" placeholder="">
                    <option selected="selected">
                    <option>Populorum Nuevo</option>
                    <option>Populorum Viejo</option>
                    <option>CCJ Nuevo</option>
                    <option>CCJ Viejo</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="grupo">* Grupo de Capacitación</label>
                  <select name="grupo"  required="required" class="form-control select2">
                    <option selected="selected">
                    <option>A2N</option>
                    <option>A2V</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="hijos">* ¿Tiene hijos?</label>
                  <select name="hijos" required="required" class="form-control select2">
                    <option selected="selected">
                    <option>Si</option>
                    <option>No</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="numero_hijos"> Número de hijos</label>
                  <input value=0 type="number" min="0" max="99"
                  id="numero_hijos" name="numero_hijos" class="form-control" placeholder="" onkeypress="return soloNumero(event)"/>
                </div>
                </div>
              </div>
            </div>



              <div class="col-lg-6">


                <div class="box box-warning">
                  <div class="box-header with-border">
                <i class="glyphicon glyphicon-book"></i>
                <h3 class="box-title">ESTUDIOS</h3>
                </div>
                <div class="box-body">


                  <div class="form-group">
                    <label for="nivel">* Nivel</label>
                    <select name="nivel" required="required" class="form-control select2">
                      <option selected="selected">
                      <option>Ninguno</option>
                      <option>Primaria</option>
                      <option>Secundaria</option>
                      <option>Superior</option>
                      <option>Universitario</option>


                    </select>
                  </div>

                  <div class="form-group">
                    <label for="centro_educativo"> Centro Educativo</label>
                    <input  type="text"
                      name="centro_educativo" maxlength="100"  class="form-control"/>
                  </div>


                  <div class="form-group">
                    <label for="cuenta"> Número de Cuenta</label>
                    <input  type="text"
                     name="cuenta" maxlength="20"  class="form-control" />
                  </div>


                  <div class="form-group">
                    <label for="carrera"> Carrera</label>
                    <input  type="text"
                     name="carrera" maxlength="100"  class="form-control"/>
                  </div>

                  <label for="inicio_carrera"> Fecha de inicio de carrera</label>
                  <div class="input-group">
                    <input class="form-control" type="text"
                    name="inicio_carrera" id="inicio_carrera" />
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  </div>

                  <div class="form-group">
                    <label for="promedio_inicial"> Promedio al entrar al proyecto</label>
                    <input value=0 type="number" min="0" max="100"
                     name="promedio_inicial" step="0.01" class="form-control"/>
                  </div>

                </div>
                </div>



              <div class="box box-warning">
                <div class="box-header with-border">
              <i class="glyphicon glyphicon-plus"></i>
              <h3 class="box-title">SALUD</h3>
              </div>
              <div class="box-body">

                <div class="form-group">
                  <label for="sangre"> Tipo de Sangre</label>
                  <select name="sangre" class="form-control select2">
                    <option selected="selected">
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>0+</option>
                    <option>0-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                  </select>
                </div>
              <div class="form-group">
                <label>Peso (Kilos):</label>
                <input id="peso" class="form-control" type="number" min="0"
                 step="0.01" name="peso" />
                 </div>

               <div class="form-group">
                <label for="enfermedades"> Enfermedades que padece</label>
                <input  type="text"   name="enfermedades" maxlength="100"  class="form-control"/>
              </div>

              <div class="form-group">
                <label for="medicamentos"> Medicamentos que toma</label>
                <input  type="text"   name="medicamentos" maxlength="100"  class="form-control"/>

              </div>
              <div class="form-group">
                <label for="operaciones"> Operaciones que ha tenido</label>
                <input  type="text"   name="operaciones" maxlength="100" class="form-control"/>
              </div>
              </div>
              </div>
              </div>
      <!-- Información familiar-->

              <div class="col-lg-12">
              <div class="box box-warning">
                <div class="box-header with-border">
            <i class="glyphicon glyphicon-home"></i>
            <h3 class="box-title">INFORMACION FAMILIAR</h3>
            </div>
            <div class="box-body">
              <div class="form-group">

              <div class="col-xs-6">
              <div class="form-group">
                <label for="nombre_madre"> Nombre de la madre</label>
                <input  type="text"   name="nombre_madre" maxlength="40"  class="form-control"/>
              </div>

              <div class="form-group">
                <label for="telefono_madre"> Número de telefono de la madre</label>
                <input type="text" maxlength="10"   name="telefono_madre" class="form-control" />
              </div>

              <div class="form-group">
                <label for="ocupacion_madre"> Ocupación de la madre</label>
                <input  type="text"   name="ocupacion_madre" maxlength="40"  class="form-control"/>
              </div>

              <div class="form-group">
                <label for="categoria_madre"> Nivel de estudios de la madre</label>
                <select name="categoria_madre"  class="form-control select2">
                  <option selected="selected">
                  <option>Ninguno</option>
                  <option>Primaria</option>
                  <option>Secundaria</option>
                  <option>Superior</option>
                  <option>Universitario</option>

                </select>
              </div>


              <div class="form-group">
                <label for="nombre_padre"> Nombre del padre</label>
                <input  type="text"   name="nombre_padre" maxlength="40"  class="form-control"/>
              </div>

              <div class="form-group">
                <label for="telefono_padre"> Número de telefono del padre</label>
                <input type="text" maxlength="10"    name="telefono_padre" class="form-control" />
              </div>


              <div class="form-group">
                <label for="ocupacion_padre"> Ocupación del padre</label>
                <input  type="text"   name="ocupacion_padre" maxlength="40"  class="form-control"/>
              </div>

              <div class="form-group">
                <label for="categoria_padre"> Nivel de estudios del padre</label>
                <select name="categoria_padre"  class="form-control select2">
                  <option selected="selected">
                  <option>Ninguno</option>
                  <option>Primaria</option>
                  <option>Secundaria</option>
                  <option>Superior</option>
                  <option>Universitario</option>

                </select>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                <label for="vive_padres"> ¿Vive con sus padres?</label>
                <select name="vive_padres"  class="form-control select2">
                  <option selected="selected">
                  <option>Vive sólo con la madre</option>
                  <option>Vive sólo con el padre</option>
                  <option>Vive con la madre y el padre</option>
                  <option>Vive con otro familiar/tutor</option>
                </select>
              </div>

              <div class="form-group">
                <label for="encargado"> Encargado/a</label>
                <input  type="text"   name="encargado" maxlength="40"  class="form-control"/>
              </div>

              <div class="form-group">
                <label for="numero_hermanos">* Número de hermanos</label>
                <input value=0 type="number" min="0" max="99"
                id="numero_hermanos" name="numero_hermanos" required="required" class="form-control" placeholder="" onkeypress="return soloNumero(event)"/>
              </div>

              <div class="form-group">
                <label for="lugar_que_ocupa"> Lugar que ocupa entre los hermanos</label>
                <input value=0 type="number" min="0" max="99"
                id="lugar_que_ocupa" name="lugar_que_ocupa" class="form-control" placeholder="" onkeypress="return soloNumero(event)"/>
              </div>



              <div class="form-group">
                <label for="tipo_vivienda"> Tipo de vivienda</label>
              <select name="tipo_vivienda"  value=" "selected class="form-control select2">
                <option selected="selected"> <!--para que aparezca en blanco por defecto-->
                <option>Adobe</option>
                <option>Tabla</option>
                <option>Ladrillo</option>
                <option>Zinc</option>
                <option>Bloque</option>
              </select>
            </div>

              <div class="form-group">
                <label for="piso_de"> Piso de </label>
                <select name="piso_de"  class="form-control select2">
                  <option selected="selected">
                  <option>Tierra</option>
                  <option>Cemento</option>
                </select>
              </div>

              <div class="form-group">
                <label for="religion"> Religión</label>
                <input  type="text"   name="religion" maxlength="40"  class="form-control"/>
              </div>
            </div>
              </div>
                </div>
                  </div>
                    </div>
            <div class="box-body">
          <input type="submit" class="btn btn-warning btn-flat pull-right" value="Guardar Ficha"/>
          <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
            </div>
          </form>
            <!-- /.box-body -->
            </div>
           </div>
           </div>
          </div>
          </section><!-- right col -->


      </div><!-- ./wrapper -->

<?php
include 'include/scripts.inc';
?>
<script type="text/javascript">
	$(document).ready(function(){
    $("#fecha").datepicker({
        defaultDate: new Date(),
        format: 'yyyy-mm-dd',
        //daysOfWeekDisabled: [0,6],
         endDate: '+0d',
        })

        $("#inicio_carrera").datepicker({
            defaultDate: new Date(),
            format: 'yyyy-mm-dd',
            //daysOfWeekDisabled: [0,6],
             endDate: '+0d',
            })
})
function soloNumero(e){
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
    }

    function limpiar() {
    document.getElementById("nuevaFicha").reset();
  }

  function getAge(){
    var hoy = new Date();
    var fechaNacimiento = new Date($("#fecha").val());
    var edad = hoy.getFullYear()-fechaNacimiento.getFullYear();
    var mes = hoy.getMonth() - fechaNacimiento.getMonth();
    if (mes < 0 || ( mes==0) && hoy.getDate() < fechaNacimiento.getDate()){
      edad--;
    }
    $("#edad").val(edad);
  }
</script>


<?php
include 'include/plugins.inc';
include 'include/fin.inc';
?>

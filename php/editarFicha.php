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
        $registro = mysql_query("select * from ficha where identidad='".$buscar."'");
        $Ficha = mysql_fetch_array($registro);
        ?>
      <div class="content-wrapper">
        <section class="content-header">
        <h1>
        Ficha de registro
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php">
          <!-- <i class="glyphicon glyphicon-dashboard"></i> -->
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
         		 <form role="form" method="POST" action="php/guardar/guardarFicha.php"  id="nuevaFicha">
          	<!--MENU DE OPCIONES-->
          	<div class="col-lg-12">
          <div class="box box-solid">



          </div>
          <!-- /.box -->
        </div>
          	<!--FIN DEL MENU OPCIONES-->
          	  <div class="col-lg-6"><!--informacion personal-->
          		<div class="box box-warning">
          			<div class="box-header with-border">
	    			<i class="glyphicon glyphicon-pencil"></i>
	    			<h3 class="box-title">DATOS GENERALES</h3>
	    			</div>
	    			<div class="box-body">
	    				<div class="form-group">
                <!--Numero de identidad-->
	    					<label for="identidad">* Numero de identidad</label>
							<input class="form-control" maxlength="13" required="required" type="text" name="identidad" placeholder="" onkeypress="return soloNumero(event)"/>
	    				</div>
	    				<div class="form-group">
	    					<label for="nombre">* Nombre y Apellidos</label>
	    					<input  type="text"   name="nombre" maxlength="40" required="required" class="form-control"/>
	    				</div>

              <div class="col-xs-6">
                <label for="fecha">* Fecha de nacimiento</label>
                <div class="input-group">
                  <input onBlur="getAge()" class="form-control" type="text" name="fecha" id="fecha" required="required"/>
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
              </div>
              <div class="col-xs-6">
                <label for="edad">* Edad</label>
                <input readonly="readonly" type="number" min="1" max="99" required="required" id="edad" name="edad" class="form-control"/>
              </div>
              <div class="form-group">
                <label for="lugarNacimiento">Lugar de Nacimiento</label>
                <input type="text" maxlength="39"  required="required" name="lugarNacimiento" class="form-control" />
              </div>

              <div class="form-group">
	    					<label for="sexo">* Sexo</label>
                <select name="sexo" class="form-control">
                  <option>Masculino</option>
                  <option>Femenino</option>
                </select>
                </div>

              <div class="form-group">
	    					<label for="direccion">* Dirección</label>
	    					<input  type="text"   name="direccion" maxlength="100" required="required" class="form-control"/>
	    				</div>

              <div class="form-group">
	    					<label for="proyecto_actual">* Proyecto donde colabora</label>
                <select name="proyecto_actual" class="form-control">
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
	    					<label for="proyectos_pasados">* Proyectos donde ha colaborado</label>
                <select name="proyectos_pasados" class="form-control">
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

              <div class="form-group"><!--Responsable-->
                <label for="telefono">Número de telefono</label>
                <input type="text" maxlength="10"   required="required" name="telefono" class="form-control" />
              </div>

              <div class="form-group">
	    					<label for="categoria">* Categoría</label>
                <select name="categoria" class="form-control">
                  <option>Populorum Nuevo</option>
                  <option>Populorum Viejo</option>
                  <option>CCJ Nuevo</option>
                  <option>CCJ Viejo</option>
                </select>
              </div>

              <div class="form-group">
                <label for="grupo">* Grupo de Capacitación</label>
                <select name="grupo" class="form-control">
                  <option>A2N</option>
                  <option>A2V</option>
                </select>
              </div>

              <div class="form-group">
                <label for="categoria">* ¿Tiene hijos?</label>
                <select name="categoria" class="form-control">
                  <option>Si</option>
                  <option>No</option>
                </select>
              </div>

              <div class="form-group">
                <label for="numero_hijos">* Número de hijos</label>
                <input value=0 type="number" min="0" max="99" required="required"
                id="numero_hijos" name="numero_hijos" class="form-control"/>
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
                  <label for="centro_educativo">* Centro Educativo</label>
                  <input  type="text"
                    name="centro_educativo" maxlength="100" required="required" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="categoria">* Nivel</label>
                  <select name="categoria" class="form-control">
                    <option>Primaria</option>
                    <option>Secundaria</option>
                    <option>Superior</option>
                    <option>Universitario</option>
                    <option>Media</option>

                  </select>
                </div>

                <div class="form-group">
                  <label for="cuenta">* Número de Cuenta</label>
                  <input  type="text"
                   name="cuenta" maxlength="20" required="required" class="form-control"/>
                </div>


                <div class="form-group">
                  <label for="carrera">* Carrera</label>
                  <input  type="text"
                   name="carrera" maxlength="100" required="required" class="form-control"/>
                </div>

                <label for="inicio_carrera">* Fecha de inicio de carrera</label>
                <div class="input-group">
                  <input onBlur="getAge()" class="form-control" type="text"
                  name="inicio_carrera" id="inicio_carrera" required="required"/>
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>

                <div class="form-group">
                  <label for="promedio_inicial">* Promedio al entrar al proyecto</label>
                  <input value=0 type="number" min="0" max="100" required="required"
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
                <label for="categoria">* Tipo de Sangre</label>
                <select name="categoria" class="form-control">
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

              <label>Peso (Kilos):</label>
              <input id="peso" class="form-control" type="number" min="0"
               step="0.01" name="peso"  required="required"/>

            </div>
            </div>
            </div>
            </div>

          <div class="box-body">
        <input type="submit" class="btn btn-warning btn-flat pull-right" value="Editar Ficha"/>
      <!--  <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>-->
          </div>
        </form>
          <!-- /.box-body -->
         	</div>
         </div>
         </div>
        </div>
        </section><!-- right col -->
      <?php
      include 'include/footer.inc';
      ?>
    </div>
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

<div class="row">
  
  <div class="col-md-12" id="btns">
  	  <button type="button" class="btn btn-default" onclick="agregar_empleado();"><span class="fa fa-plus" style="color:#5e8cf3;"></span>&nbsp;Agregar</button>
      <button type="button" class="btn btn-default" onclick="editar_empleado();"><span class="fa fa-edit" style="color:#a66cb5;"></span>&nbsp;Editar</button>
      <button type="button" class="btn btn-default" onclick="Eliminar_empleado();"><span class="fa fa-remove" style="color:#ea3949;"></span>&nbsp;Eliminar</button>
      <button type="button" class="btn btn-default" onclick="Registrar_movimientos();"><span class="fa fa-flash" style="color:#FF5733;"></span>&nbsp;Registrar Movimientos</button>
  </div>

  <div class="col-md-10">
    
              <table id="dg"></table>
			  <div id="pg_ptoolbar" style="height: 10px;"></div>


  </div>


</div>

<center>
   <div id="Modal_agrega_empleado" class="modal fade" tabindex="-1" role="dialog" style="overflow:auto;">

      <div class="modal-dialog" role="document" id="modal_content_agrega_empleado" style="width: 30%;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_title" style="font-size: 25px;">
                <b>Alta empleado</b>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="modal_body_agrega_empleado" style="text-align: left;">
              
                <center>

                    <div class="row">
                       
                        <!--<form class="col-md-12" method="POST" action="{{ route('enlace') }}">-->
                            <div class="row col-md-12">
                                <div class="input-field col-md-12">
                                    <label for="txt_nombre">nombre</label>
                                    <input id="txt_nombre" type="text" class="form-control" name="txt_nombre" value="" required autofocus>
                                  
                                </div>
                                <div class="input-field col-md-12">
                                    <label for="txt_numero_empleado">numero empleado</label>
                                    <input id="txt_numero_empleado" type="text" class="form-control" name="txt_numero_empleado" value="" required>
                                </div>

                                <div class="input-field col-md-12">

                                	<label for="rol">rol</label>
                                	<select id="slc_rol" class="form-control" style="text-align: center;">
                                		<option value="0">seleccione</option>
                                		<option value="1">choferes</option>
                                		<option value="2">cargadores</option>
                                		<option value="3">auxiliares</option>
                                	</select>

                                </div>

                                <div class="input-field col-md-12">
                                    <label for="tipo_contratacion">tipo contratacion</label>
                                    <select id="slc_tipo_contratacion" class="form-control" style="text-align: center;">
                                    	<option value="0">seleccione</option>
                                		<option value="1">interno</option>
                                		<option value="2">externo</option>
                                	</select>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="telefono">telefono</label>
                                    <input id="txt_telefono" type="text" class="form-control" name="telefono" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="correo">correo</label>
                                    <input id="txt_correo" type="text" class="form-control" name="correo" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="direccion">direccion</label>
                                    <input id="txt_direccion" type="text" class="form-control" name="direccion" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <br><br>
                                    <button class="btn btn-primary" type="button" onclick="guardar_empleado();">Guardar
                                        <i class="fa-solid fa-person"></i>
                                    </button>
                                </div>
                            </div>
                            
                        <!--</form>-->
                    </div>


                    
               </center>

          </div>
          <!--<div class="modal-footer" id="modal_footer_agrega_empleado">
            <button type="button" class="btn btn-primary" id="btn_mod_guardar_agrega_empleado" onclick="guardar_agrega_empleado();"><i>&nbsp;Guardar</i></button>
          </div>-->
        </div>
      </div>

   </div>
</center>

<center>
   <div id="Modal_edita_empleado" class="modal fade" tabindex="-1" role="dialog" style="overflow:auto;">

      <div class="modal-dialog" role="document" id="modal_content_edita_empleado" style="width: 30%;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_title" style="font-size: 25px;">
                <b>Edicion empleado</b>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="modal_body_edita_empleado" style="text-align: left;">
              
                <center>

                    <div class="row">
                       
                        <!--<form class="col-md-12" method="POST" action="{{ route('enlace') }}">-->
                            <div class="row col-md-12">
                                <input type="hidden" id="txt_id_edicion_empleado" value="">
                                <div class="input-field col-md-12">
                                    <label for="nombre">nombre</label>
                                    <input id="txt_edicion_nombre" type="text" class="form-control" name="txt_nombre" value="" required autofocus>
                                  
                                </div>
                                <div class="input-field col-md-12">
                                    <label for="txt_edicion_numero_empleado">numero empleado</label>
                                    <input id="txt_edicion_numero_empleado" type="text" class="form-control" name="numero_empleado" value="" required>
                                </div>

                                <div class="input-field col-md-12">

                                	<label for="rol">rol</label>
                                	<select class="form-control" id="slc_edicion_rol" style="text-align: center;">
                                		<option value="0">seleccione</option>
                                		<option value="1">choferes</option>
                                		<option value="2">cargadores</option>
                                		<option value="3">auxiliares</option>
                                	</select>

                                </div>

                                <div class="input-field col-md-12">
                                    <label for="tipo_contratacion">tipo contratacion</label>
                                    <select class="form-control" id="slc_edicion_tipo_contratacion" style="text-align: center;">
                                    	<option value="0">seleccione</option>
                                		<option value="1">interno</option>
                                		<option value="2">externo</option>
                                	</select>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="telefono">telefono</label>
                                    <input id="txt_edicion_telefono" type="text" class="form-control" name="telefono" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="correo">correo</label>
                                    <input id="txt_edicion_correo" type="text" class="form-control" name="correo" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="direccion">direccion</label>
                                    <input id="txt_edicion_direccion" type="text" class="form-control" name="direccion" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <br><br>
                                    <button class="btn btn-primary" type="button" onclick="guardar_edicion_empleado();">Guardar
                                        <i class="fa-solid fa-person"></i>
                                    </button>
                                </div>
                            </div>
                            
                        <!--</form>-->
                    </div>


                    
               </center>

          </div>
        </div>
      </div>

   </div>
</center>
<center>
   <div id="Modal_agrega_movimiento" class="modal fade" tabindex="-1" role="dialog" style="overflow:auto;">

      <div class="modal-dialog" role="document" id="modal_content_agrega_movimiento" style="width: 30%;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_title" style="font-size: 25px;">
                <b>Registra Movimiento</b>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="modal_body_agrega_movimiento" style="text-align: left;">
              
                <center>

                    <div class="row">
                    

                        <!--<form class="col-md-12" method="POST" action="{{ route('enlace') }}">-->
                            <div class="row col-md-12">
                             
                                <div class="input-field col-md-12">
                                    <label for="cantidad_entregas">#entregas</label>
                                    <input id="cantidad_entregas" type="text" class="form-control" name="telefono" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="correo">cubrio turno</label>
                                    <select id="slc_cubrio_turno" class="form-control" style="text-align: center;">
                                        <option value="1">no</option>
                                        <option value="2">si</option>
                                    </select>
                                </div>

                                <div class="input-field col-md-12">
                                    <br><br>
                                    <button class="btn btn-primary" type="button" onclick="guardar_movimiento();">Guardar
                                        <i class="fa-solid fa-person"></i>
                                    </button>
                                </div>
                            </div>
                            
                        <!--</form>-->
                    </div>


                    
               </center>

          </div>
          <!--<div class="modal-footer" id="modal_footer_agrega_empleado">
            <button type="button" class="btn btn-primary" id="btn_mod_guardar_agrega_empleado" onclick="guardar_agrega_empleado();"><i>&nbsp;Guardar</i></button>
          </div>-->
        </div>
      </div>

   </div>
</center>

<script type="text/javascript">

	consulta_empleados();

	function consulta_empleados(){

    $("#dg").clearGridData(true).trigger("reloadGrid");
   
    $.ajax({
            url: "<?php echo base_url(); ?>index.php/Cnt_general/consulta_empleados",
            type: 'POST',
            data: {},
            success: function (data) {
                  	
                  	data = JSON.parse(data);
                  	console.log(data);
                    $("#dg").jqGrid({

                        datatype: "local",
                        shrinkToFit:false,
                        forceFit:true,

                        colNames:['id','nombre', 'numero_empleado', 'rol', 'tipo_contratacion', 'fecha_contratacion', 'telefono', 'correo', 'direccion', 'estatus'],
                        colModel:[
                                  {name:'id',index:'id',sorttype:"int", editable:true},
                                  {name:'nombre',index:'nombre',sorttype:"int", editable:true},
                                  {name:'numero_empleado',index:'numero_empleado',sorttype:"int", editable:true},
                                  {name:'rol',index:'rol',sorttype:"int", editable:true},
                                  {name:'tipo_contratacion',index:'tipo_contratacion',sorttype:"int", editable:true},
                                  {name:'fecha_contratacion',index:'fecha_contratacion',sorttype:"int", editable:true},
                                  {name:'telefono',index:'telefono',sorttype:"int", editable:true},
                                  {name:'correo',index:'correo',sorttype:"int", editable:true},
                                  {name:'direccion',index:'direccion',sorttype:"int", editable:true},
                                  {name:'estatus',index:'estatus',sorttype:"int", editable:true}       
                        ],
                        multiselect: false,
                        caption: "Empleados",
                        pager: "#pg_ptoolbar",
                        viewrecords: true,
                        rowNum: 10000000,
                        pgbuttons: false,
                        autowidth: true,
                        height: 200,
                        loadonce:true,
                        pginput: false
                       
                    });

                    for(var i=0;i<=data.length;i++){
                      $("#dg").jqGrid('addRowData',i+1,data[i]);
                    }
                    
                    $("#dg").jqGrid('navGrid','#ptoolbar',{del:false,add:false,edit:false,search:false});
                    $("#dg").jqGrid('filterToolbar',{stringResult: true,searchOnEnter : false});

              },
              error: function () {
                  alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
              }

              
          });

         //}

}

function Registrar_movimientos(){

    $('#Modal_agrega_movimiento').modal({
          backdrop: true,
          show: true
    });

}

function agregar_empleado(){

	$('#Modal_agrega_empleado').modal({
          backdrop: true,
          show: true
    });

}

function guardar_movimiento(){

    var rowId =$("#dg").jqGrid('getGridParam','selrow');  
    var rowData = jQuery("#dg").getRowData(rowId);

    var rol = rowData['rol'];
    var tipo_contratacion = rowData['tipo_contratacion'];
    var numero_empleado = rowData['numero_empleado'];

    var slc_rol_movimiento = $("#slc_rol_movimiento").val();
    var slc_tipo_contratacion_movimiento = $("#slc_tipo_contratacion_movimiento").val();
    var cantidad_entregas = $("#cantidad_entregas").val();
    var slc_cubrio_turno = $("#slc_cubrio_turno").val();

    $.ajax({
        url: "<?php echo base_url(); ?>index.php/Cnt_general/guardar_movimiento",
        type: 'POST',
        data: {rol:rol,
        tipo_contratacion:tipo_contratacion,
        numero_empleado:numero_empleado,
        slc_rol_movimiento:slc_rol_movimiento,
        slc_tipo_contratacion_movimiento:slc_tipo_contratacion_movimiento,
        cantidad_entregas:cantidad_entregas,
        slc_cubrio_turno:slc_cubrio_turno},
        success: function (data) {
                
                alert("registro guardado correctamente")        
           
        },
        error: function () {
          alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
        }

    });

}

function guardar_empleado(){

    var txt_nombre = $("#txt_nombre").val();
    var txt_numero_empleado = $("#txt_numero_empleado").val();
    var slc_rol = $("#slc_rol").val();
    var slc_tipo_contratacion = $("#slc_tipo_contratacion").val();
    var txt_telefono = $("#txt_telefono").val();
    var txt_correo = $("#txt_correo").val();
    var txt_direccion = $("#txt_direccion").val();

    $.ajax({
            url: "<?php echo base_url(); ?>index.php/Cnt_general/guardar_empleado",
            type: 'POST',
            data: {txt_nombre:txt_nombre,
            txt_numero_empleado:txt_numero_empleado,
            slc_rol:slc_rol,
            slc_tipo_contratacion:slc_tipo_contratacion,
            txt_telefono:txt_telefono,
            txt_correo:txt_correo,
            txt_direccion:txt_direccion},
            success: function (data) {
                    
                    alert("registro guardado correctamente")        
               
            },
            error: function () {
              alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
            }
     
          });

}

function guardar_edicion_empleado(){

    var txt_id_edicion_empleado = $("#txt_id_edicion_empleado").val();
    var txt_nombre = $("#txt_edicion_nombre").val();
    var numero_empleado = $("#txt_edicion_numero_empleado").val();
    var slc_rol = $("#slc_edicion_rol").val();
    var slc_tipo_contratacion = $("#slc_edicion_tipo_contratacion").val();
    var txt_telefono = $("#txt_edicion_telefono").val();
    var txt_correo = $("#txt_edicion_correo").val();
    var txt_direccion = $("#txt_edicion_direccion").val();

    $.ajax({
            url: "<?php echo base_url(); ?>index.php/Cnt_general/guardar_edicion_empleado",
            type: 'POST',
            data: {txt_id_edicion_empleado:txt_id_edicion_empleado,txt_nombre:txt_nombre,
            numero_empleado:numero_empleado,
            slc_rol:slc_rol,
            slc_tipo_contratacion:slc_tipo_contratacion,
            txt_telefono:txt_telefono,
            txt_correo:txt_correo,
            txt_direccion:txt_direccion},
            success: function (data) {
                    
                    alert("registro guardado correctamente")        
               
            },
            error: function () {
              alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
            }

              
          });


}

function editar_empleado(){

    var rowId =$("#dg").jqGrid('getGridParam','selrow');  
    var rowData = jQuery("#dg").getRowData(rowId);

    var id = rowData['id'];
    var nombre = rowData['nombre'];
    var numero_empleado = rowData['numero_empleado'];
    var rol = rowData['rol'];
    var tipo_contratacion = rowData['tipo_contratacion'];
    var fecha_contratacion = rowData['fecha_contratacion'];
    var telefono = rowData['telefono'];
    var correo = rowData['correo'];
    var direccion = rowData['direccion'];
    var estatus = rowData['estatus'];

    $.ajax({
            url: "<?php echo base_url(); ?>index.php/Cnt_general/consulta_unicoempleado",
            type: 'POST',
            data: {},
            success: function (data) {
                  	$('#Modal_edita_empleado').modal({
				          backdrop: true,
				          show: true
				    });
                    
                    $("#txt_id_edicion_empleado").val(id);
                    $("#txt_edicion_nombre").val(nombre);
                    $("#txt_edicion_numero_empleado").val(numero_empleado);
                    $("#slc_edicion_rol").val(rol);
                    $("#slc_edicion_tipo_contratacion").val(tipo_contratacion);
                    $("#txt_edicion_telefono").val(telefono);
                    $("#txt_edicion_correo").val(correo);
                    $("#txt_edicion_direccion").val(direccion);

              },
              error: function () {
                  alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
              }

              
          });


}

function Eliminar_empleado(){


    var rowId =$("#dg").jqGrid('getGridParam','selrow');  
    var rowData = jQuery("#dg").getRowData(rowId);
    var id = rowData['id'];

    $.ajax({
            url: "<?php echo base_url(); ?>index.php/Cnt_general/consulta_unicoempleado",
            type: 'POST',
            data: {id:id},
            success: function (data) {
                    
                    alert("registro eliminado correctamente");

              },
              error: function () {
                  alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
              }

              
          });


}

</script>

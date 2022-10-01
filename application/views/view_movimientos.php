<div class="input-field col-md-4">

    <div class="row">

        <div class="col-md-6">
            <label for="numero_empleado_search">numero empleado</label>
            <input id="numero_empleado_search" type="text" class="form-control" name="numero_empleado_search" value="" required>
        </div>

        <div class="col-md-6">
            <button type="button" class="btn btn-default" onclick="buscar_movimientos();"><span class="fa fa-search" style="color:#a66cb5;"></span>&nbsp;Buscar</button>
        </div>

    </div>
    <br>
</div>
<div class="row">
  <div class="col-md-12" id="btns">
      <button type="button" class="btn btn-default" onclick="editar_movimiento();"><span class="fa fa-edit" style="color:#a66cb5;"></span>&nbsp;Editar</button>
      <button type="button" class="btn btn-default" onclick="Eliminar_movimiento();"><span class="fa fa-remove" style="color:#ea3949;"></span>&nbsp;Eliminar</button>

  </div>

  <div class="col-md-10">
    
              <table id="dg"></table>
			  <div id="pg_ptoolbar" style="height: 10px;"></div>
              <button type="button" class="btn btn-default" onclick="calcular_pago();"><span class="fa fa-money" style="color:#FF5733;"></span>&nbsp;Calcular pago</button>

  </div>


</div>

<center>
   <div id="Modal_edita_movimiento" class="modal fade" tabindex="-1" role="dialog" style="overflow:auto;">

      <div class="modal-dialog" role="document" id="modal_content_edita_movimiento" style="width: 30%;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_title" style="font-size: 25px;">
                <b>Edicion empleado</b>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="modal_body_edita_movimiento" style="text-align: left;">
              
                <center>

                    <div class="row">
                       
                        <!--<form class="col-md-12" method="POST" action="{{ route('enlace') }}">-->
                            <div class="row col-md-12">
                                <div class="input-field col-md-12">
                                    <label for="nombre">nombre</label>
                                    <input id="txt_edicion_nombre" type="text" class="form-control" name="txt_nombre" value="" required autofocus>
                                  
                                </div>
                                <div class="input-field col-md-12">
                                    <label for="numero_empleado">numero empleado</label>
                                    <input id="numeedicion_ro_movimiento" type="text" class="form-control" name="numero_empleado" value="" required>
                                </div>

                                <div class="input-field col-md-12">

                                	<label for="rol">rol</label>
                                	<select class="form-control" id="slc_edicion_rol">
                                		<option value="0">seleccione</option>
                                		<option value="1">choferes</option>
                                		<option value="2">cargadores</option>
                                		<option value="3">auxiliares</option>
                                	</select>

                                </div>

                                <div class="input-field col-md-12">
                                    <label for="tipo_contratacion">tipo contratacion</label>
                                    <select class="form-control" id="slc_edicion_tipo_contratacion">
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
                                    <button class="btn waves-effect waves-light" type="button" onclick="guardar_edicion_movimiento();">Guardar
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
   <div id="Modal_sueldo" class="modal fade" tabindex="-1" role="dialog" style="overflow:auto;">

      <div class="modal-dialog" role="document" id="modal_content_sueldo" style="width: 30%;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_title" style="font-size: 25px;">
                <b>Sueldo</b>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="modal_body_sueldo" style="text-align: left;">
              
               <center>

                    
               </center>

          </div>
        </div>
      </div>

   </div>
</center>


<script type="text/javascript">

	consulta_movimientos();

	function consulta_movimientos(){

    $("#dg").clearGridData(true).trigger("reloadGrid");
   
    $.ajax({
            url: "<?php echo base_url(); ?>index.php/Cnt_general/consulta_movimientos",
            type: 'POST',
            data: {},
            success: function (data) {
                  	
                  	data = JSON.parse(data);
                  	console.log(data);
                    $("#dg").jqGrid({

                        datatype: "local",
                        shrinkToFit:false,
                        forceFit:true,

                        colNames:['id','numero_empleado','nombre_movimiento','rol','tipo_movimiento','cantidad_entregas','cubrio_turno','fecha_movimiento'],
                        colModel:[
                                  {name:'id',index:'id',sorttype:"int", editable:true},
                                  {name:'numero_empleado',index:'numero_empleado',sorttype:"int", editable:true},
                                  {name:'nombre_movimiento',index:'nombre_movimiento',sorttype:"int", editable:true, hidden:true},
                                  {name:'rol',index:'rol',sorttype:"int", editable:true},
                                  {name:'tipo_movimiento',index:'tipo_movimiento',sorttype:"int", editable:true},
                                  {name:'cantidad_entregas',index:'cantidad_entregas',sorttype:"int", editable:true},
                                  {name:'cubrio_turno',index:'cubrio_turno',sorttype:"int", editable:true},
                                  {name:'fecha_movimiento',index:'fecha_movimiento',sorttype:"int", editable:true},  
                        ],
                        multiselect: false,
                        caption: "Movimientos",
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
                 

              },
              error: function () {
                  alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
              }

              
          });

         //}

}


function guardar_edicion_movimiento(){

    var txt_nombre = $("#txt_edicion_nombre").val();
    var numero_empleado = $("#numero_movimiento").val();
    var slc_rol = $("#slc_edicion_rol").val();
    var slc_tipo_contratacion = $("#slc_tipo_contratacion").val();
    var txt_telefono = $("#txt_edicion_telefono").val();
    var txt_correo = $("#txt_edicion_correo").val();
    var txt_direccion = $("#txt_edicion_direccion").val();

    $.ajax({
            url: "<?php echo base_url(); ?>index.php/Cnt_general/guardar_movimiento",
            type: 'POST',
            data: {txt_nombre:txt_nombre,
            numero_movimiento:numero_movimiento,
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

function editar_movimiento(){

    var rowId =$("#dg").jqGrid('getGridParam','selrow');  
    var rowData = jQuery("#dg").getRowData(rowId);

    var id = rowData['id'];
    var nombre = rowData['nombre'];
    var numero_movimiento = rowData['numero_movimiento'];
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
            data: {allrows:JSON.stringify(allrows)},
            success: function (data) {
                  	
                  	$('#Modal_edita_movimiento').modal({
				          backdrop: true,
				          show: true
				    });
                    
                    $("#txt_nombre").val(nombre);
                    $("#numero_empleado").val(numero_empleado);
                    $("#slc_rol").val(rol);
                    $("#slc_tipo_contratacion").val(tipo_contratacion);
                    $("#txt_telefono").val(telefono);
                    $("#txt_correo").val(correo);
                    $("#txt_direccion").val(direccion);

              },
              error: function () {
                  alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
              }

              
          });


}

function Eliminar_movimiento(){

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

function buscar_movimientos(){

    $("#dg").clearGridData(true).trigger("reloadGrid");

    var numero_empleado_search = $("#numero_empleado_search").val();

    $.ajax({
            url: "<?php echo base_url(); ?>index.php/Cnt_general/consulta_movimientos",
            type: 'POST',
            data: {numero_empleado_search:numero_empleado_search},
            success: function (data) {
                    
                    data = JSON.parse(data);
                    console.log(data);
                    $("#dg").jqGrid({

                        datatype: "local",
                        shrinkToFit:false,
                        forceFit:true,

                        colNames:['id','numero_empleado','nombre_movimiento','rol','tipo_movimiento','cantidad_entregas','cubrio_turno','fecha_movimiento'],
                        colModel:[
                                  {name:'id',index:'id',sorttype:"int", editable:true},
                                  {name:'numero_empleado',index:'numero_empleado',sorttype:"int", editable:true},
                                  {name:'nombre_movimiento',index:'nombre_movimiento',sorttype:"int", editable:true},
                                  {name:'rol',index:'rol',sorttype:"int", editable:true},
                                  {name:'tipo_movimiento',index:'tipo_movimiento',sorttype:"int", editable:true},
                                  {name:'cantidad_entregas',index:'cantidad_entregas',sorttype:"int", editable:true},
                                  {name:'cubrio_turno',index:'cubrio_turno',sorttype:"int", editable:true},
                                  {name:'fecha_movimiento',index:'fecha_movimiento',sorttype:"int", editable:true},  
                        ],
                        multiselect: false,
                        caption: "Movimientos",
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
                 

              },
              error: function () {
                  alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
              }

              
          });

}


function calcular_pago(){
     
    //optiene todo los registros de la tabla referente a la busqueda del empleado
    allrows = jQuery("#dg").jqGrid('getRowData');
    var numero_empleado_search = $("#numero_empleado_search").val();

  
    var sel_id = $('#dg').jqGrid('getGridParam', 'selrow');
    var rowData = $('#dg').jqGrid('getRowData',sel_id);
    //console.log(rowData);


    $.ajax({
            url: "<?php echo base_url(); ?>index.php/Cnt_general/calcular_pago",
            type: 'POST',
            data: {numero_empleado_search:numero_empleado_search,rowData:JSON.stringify(allrows)},
            success: function (data) {
                    
                    //data = JSON.parse(data);
                    $('#Modal_sueldo').modal({
                          backdrop: true,
                          show: true
                    });

                    $("#modal_body_sueldo").html(data);

              },
              error: function () {
                  alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
              }

              
          });


}

</script>

<div class="row">
  
  <div class="col-md-12" id="btns">
  	  <button type="button" class="btn btn-default" onclick="agregar_empleado();"><span class="fa fa-plus" style="color:#5e8cf3;"></span>&nbsp;Agregar</button>
      <button type="button" class="btn btn-default" onclick="editar_empleado();"><span class="fa fa-edit" style="color:#a66cb5;"></span>&nbsp;Editar</button>
      <button type="button" class="btn btn-default" onclick="Eliminar_empleado();"><span class="fa fa-remove" style="color:#ea3949;"></span>&nbsp;Eliminar</button>
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
                                    <label for="nombre">nombre</label>
                                    <input id="txt_nombre" type="text" class="form-control" name="txt_nombre" value="" required autofocus>
                                  
                                </div>
                                <div class="input-field col-md-12">
                                    <label for="numero_empleado">numero empleado</label>
                                    <input id="numero_empleado" type="text" class="form-control" name="numero_empleado" value="" required>
                                </div>

                                <div class="input-field col-md-12">

                                	<label for="rol">rol</label>
                                	<select class="form-control">
                                		<option value="0">seleccione</option>
                                		<option value="1">choferes</option>
                                		<option value="2">cargadores</option>
                                		<option value="3">auxiliares</option>
                                	</select>

                                </div>

                                <div class="input-field col-md-12">
                                    <label for="tipo_contratacion">tipo contratacion</label>
                                    <select class="form-control">
                                    	<option value="0">seleccione</option>
                                		<option value="1">interno</option>
                                		<option value="2">externo</option>
                                	</select>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="telefono">telefono</label>
                                    <input id="telefono" type="text" class="form-control" name="telefono" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="correo">correo</label>
                                    <input id="correo" type="text" class="form-control" name="correo" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="direccion">direccion</label>
                                    <input id="direccion" type="text" class="form-control" name="direccion" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <br><br>
                                    <button class="btn waves-effect waves-light" type="button" onclick="btn_actualiza_conta();">Guardar
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
                                <div class="input-field col-md-12">
                                    <label for="nombre">nombre</label>
                                    <input id="txt_nombre" type="text" class="form-control" name="txt_nombre" value="" required autofocus>
                                  
                                </div>
                                <div class="input-field col-md-12">
                                    <label for="numero_empleado">numero empleado</label>
                                    <input id="numero_empleado" type="text" class="form-control" name="numero_empleado" value="" required>
                                </div>

                                <div class="input-field col-md-12">

                                	<label for="rol">rol</label>
                                	<select class="form-control">
                                		<option value="0">seleccione</option>
                                		<option value="1">choferes</option>
                                		<option value="2">cargadores</option>
                                		<option value="3">auxiliares</option>
                                	</select>

                                </div>

                                <div class="input-field col-md-12">
                                    <label for="tipo_contratacion">tipo contratacion</label>
                                    <select class="form-control">
                                    	<option value="0">seleccione</option>
                                		<option value="1">interno</option>
                                		<option value="2">externo</option>
                                	</select>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="telefono">telefono</label>
                                    <input id="telefono" type="text" class="form-control" name="telefono" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="correo">correo</label>
                                    <input id="correo" type="text" class="form-control" name="correo" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <label for="direccion">direccion</label>
                                    <input id="direccion" type="text" class="form-control" name="direccion" value="" required>
                                </div>

                                <div class="input-field col-md-12">
                                    <br><br>
                                    <button class="btn waves-effect waves-light" type="button" onclick="btn_actualiza_conta();">Guardar
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
                 

              },
              error: function () {
                  alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
              }

              
          });

         //}

}

function agregar_empleado(){

	$('#Modal_agrega_empleado').modal({
          backdrop: true,
          show: true
    });

}

function editar_empleado(){

	var selectedRowIds = $("#dg").jqGrid("getGridParam", 'selarrrow');
       
    var allrows = [];
    $.each(selectedRowIds, function( index, value ) {

      var row = $('#dg').jqGrid('getRowData', value);
      allrows.push(row);

    });

    $.ajax({
            url: "<?php echo base_url(); ?>index.php/Cnt_general/consulta_unicoempleado",
            type: 'POST',
            data: {allrows:JSON.stringify(allrows)},
            success: function (data) {
                  	
                  	$('#Modal_edita_empleado').modal({
				          backdrop: true,
				          show: true
				    });
                 

              },
              error: function () {
                  alert('Ocurrió un error interno, favor de reportarlo con el administrador del sistema');
              }

              
          });


}

</script>

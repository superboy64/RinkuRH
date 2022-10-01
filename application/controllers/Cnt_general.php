<?php
class Cnt_general extends CI_Controller {

	//se crea constructor
	public function __construct()
	{
	      parent::__construct();
	      //se incluye el modelo que ara la interaccion con la base de datos
	      $this->load->model('Mod_general');
	     
	}

	public function index()
	{
		//se incluye vista con librerias
		$this->load->view('view_header');
		//se incluye vista con scripts js
		$this->load->view('view_footer');
		//se inluye vista con el contenido de la pagina
    	$this->load->view('view_inicio');		

	}

	public function empleados()
	{
		//se incluye vista con librerias
		$this->load->view('view_header');
		//se incluye vista con scripts js
		$this->load->view('view_footer');
		//se inluye vista con el contenido de la pagina
    	$this->load->view('view_empleados');		

	}

	public function movimientos()
	{
		//se incluye vista con librerias
		$this->load->view('view_header');
		//se incluye vista con scripts js
		$this->load->view('view_footer');
		//se inluye vista con el contenido de la pagina
    	$this->load->view('view_movimientos');		

	}

	public function consulta_empleados(){

		//ejecuta funcion del modelo
		$rest = $this->Mod_general->consulta_empleados();
		echo json_encode($rest);

	}

	public function consulta_unicoempleado(){

		$allrows = $this->input->post('allrows');
		$rest = $this->Mod_general->consulta_unicoempleado($allrows);//ejecuta funcion del modelo
		echo json_encode($rest);

	}

	public function consulta_movimientos(){
		
		//parametros obtenidos mediante post
		$numero_empleado_search = $this->input->post('numero_empleado_search');
		$rest = $this->Mod_general->consulta_movimientos($numero_empleado_search);//ejecuta funcion del modelo
		echo json_encode($rest);
		
	}

	public function guardar_empleado(){

		//parametros obtenidos mediante post
		$txt_nombre = $this->input->post('txt_nombre');
		$txt_numero_empleado = $this->input->post('txt_numero_empleado');
		$slc_rol = $this->input->post('slc_rol');
		$slc_tipo_contratacion = $this->input->post('slc_tipo_contratacion');
		$txt_telefono = $this->input->post('txt_telefono');
		$txt_correo = $this->input->post('txt_correo');
		$txt_direccion = $this->input->post('txt_direccion');

		$rest = $this->Mod_general->guardar_empleado($txt_nombre,$txt_numero_empleado,$slc_rol,$slc_tipo_contratacion,$txt_telefono,$txt_correo,$txt_direccion);//ejecuta funcion del modelo

		//echo json_encode($rest);

	}

	public function guardar_edicion_empleado(){

		//parametros obtenidos mediante post
		$txt_id_edicion_empleado = $this->input->post('txt_id_edicion_empleado');
		$txt_nombre = $this->input->post('txt_nombre');
		$txt_numero_empleado = $this->input->post('numero_empleado');
		$slc_rol = $this->input->post('slc_rol');
		$slc_tipo_contratacion = $this->input->post('slc_tipo_contratacion');
		$txt_telefono = $this->input->post('txt_telefono');
		$txt_correo = $this->input->post('txt_correo');
		$txt_direccion = $this->input->post('txt_direccion');

		$rest = $this->Mod_general->guardar_edicion_empleado($txt_id_edicion_empleado,$txt_nombre,$txt_numero_empleado,$slc_rol,$slc_tipo_contratacion,$txt_telefono,$txt_correo,$txt_direccion);//ejecuta funcion del modelo
		
		//echo json_encode($rest);

	}

	public function guardar_movimiento(){

		//parametros obtenidos mediante post
		$rol = $this->input->post('rol');
		$tipo_contratacion = $this->input->post('tipo_contratacion');
		$numero_empleado = $this->input->post('numero_empleado');
		$slc_rol_movimiento = $this->input->post('slc_rol_movimiento');
		$slc_tipo_contratacion_movimiento = $this->input->post('slc_tipo_contratacion_movimiento');
		$cantidad_entregas = $this->input->post('cantidad_entregas');
		$slc_cubrio_turno = $this->input->post('slc_cubrio_turno');


		$rest = $this->Mod_general->guardar_movimiento($rol,$tipo_contratacion,$numero_empleado,$slc_rol_movimiento,$slc_tipo_contratacion_movimiento,$cantidad_entregas,$slc_cubrio_turno);


	}

	public function calcular_pago(){

		//parametros obtenidos mediante post
		$numero_empleado_search = $this->input->post('numero_empleado_search');
		$rowData = $this->input->post('rowData');

		$rest = $this->Mod_general->calcular_pago($numero_empleado_search,$rowData);

        echo json_encode($rest);
      

	}


}

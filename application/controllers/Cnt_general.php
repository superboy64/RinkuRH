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

	public function consulta_empleados(){

		$rest = $this->Mod_general->consulta_empleados();
		echo json_encode($rest);

	}

	public function consulta_unicoempleado(){

		$allrows = $this->input->post('allrows');
		$rest = $this->Mod_general->consulta_unicoempleado($allrows);
		echo json_encode($rest);

	}

	public function consulta_movimientos(){

		$rest = $this->Mod_general->consulta_movimientos();
		echo json_encode($rest);
		
	}

	public function guardar_empleado(){

		$txt_nombre = $this->input->post('txt_nombre');
		$txt_numero_empleado = $this->input->post('txt_numero_empleado');
		$slc_rol = $this->input->post('slc_rol');
		$slc_tipo_contratacion = $this->input->post('slc_tipo_contratacion');
		$txt_telefono = $this->input->post('txt_telefono');
		$txt_correo = $this->input->post('txt_correo');
		$txt_direccion = $this->input->post('txt_direccion');

		$rest = $this->Mod_general->guardar_empleado($txt_nombre,$txt_numero_empleado,$slc_rol,$slc_tipo_contratacion,$txt_telefono,$txt_correo,$txt_direccion);

		//echo json_encode($rest);

	}

	public function guardar_edicion_empleado(){

		$txt_id_edicion_empleado = $this->input->post('txt_id_edicion_empleado');
		$txt_nombre = $this->input->post('txt_nombre');
		$txt_numero_empleado = $this->input->post('numero_empleado');
		$slc_rol = $this->input->post('slc_rol');
		$slc_tipo_contratacion = $this->input->post('slc_tipo_contratacion');
		$txt_telefono = $this->input->post('txt_telefono');
		$txt_correo = $this->input->post('txt_correo');
		$txt_direccion = $this->input->post('txt_direccion');

		$rest = $this->Mod_general->guardar_edicion_empleado($txt_id_edicion_empleado,$txt_nombre,$txt_numero_empleado,$slc_rol,$slc_tipo_contratacion,$txt_telefono,$txt_correo,$txt_direccion);
		
		//echo json_encode($rest);

	}

}

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

	public function prueba()
	{
		//se incluye vista con librerias
		$this->load->view('view_header');
		//se incluye vista con scripts js
		$this->load->view('view_footer');
		//se inluye vista con el contenido de la pagina
    	$this->load->view('view_prueba');		

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


}

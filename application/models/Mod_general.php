<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_general extends CI_Model { 

   public function __construct() {
      parent::__construct();
      $this->load->database('default');
   }
   
   public function consulta_empleados(){

      $res = $this->db->query("SELECT * FROM empleados");
      
      $res = $res->result_array();

      return $res;

   }

   public function consulta_unicoempleado($allrows){

      print_r($allrows);
      
      /*$res = $this->db->query("SELECT * FROM empleados");
      
      $res = $res->result_array();

      return $res;*/

   }

   
}
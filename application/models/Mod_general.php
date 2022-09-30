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

   public function consulta_movimientos(){

      $res = $this->db->query("SELECT * FROM movimientos");
      
      $res = $res->result_array();

      return $res;

   }

   public function guardar_empleado($txt_nombre,$txt_numero_empleado,$slc_rol,$slc_tipo_contratacion,$txt_telefono,$txt_correo,$txt_direccion){

      $res = $this->db->query("INSERT INTO empleados(nombre, numero_empleado, rol, tipo_contratacion, fecha_contratacion, telefono, correo, direccion, estatus) values('$txt_nombre','$txt_numero_empleado','$slc_rol','$slc_tipo_contratacion',now(),'$txt_telefono','$txt_correo','$txt_direccion',1)");
      

   }

   public function guardar_edicion_empleado($txt_id_edicion_empleado,$txt_nombre,$txt_numero_empleado,$slc_rol,$slc_tipo_contratacion,$txt_telefono,$txt_correo,$txt_direccion){

      $res = $this->db->query("UPDATE empleados
         SET nombre = '$txt_nombre', 
         numero_empleado = '$txt_numero_empleado', 
         rol = '$slc_rol', 
         tipo_contratacion = '$slc_tipo_contratacion',
         telefono = '$txt_telefono', 
         correo = '$txt_correo', 
         direccion = '$txt_direccion'
         where id = $txt_id_edicion_empleado
         ");
      

   }

   public function consulta_unicoempleado($allrows){

      print_r($allrows);
      
      /*$res = $this->db->query("SELECT * FROM empleados");
      
      $res = $res->result_array();

      return $res;*/

   }

   
}
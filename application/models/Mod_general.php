<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_general extends CI_Model { 

   public function __construct() {
      parent::__construct();
      $this->load->database('default');
   }
   
   public function consulta_empleados(){// se genera el script para obtener los empleados

      $res = $this->db->query("SELECT * FROM empleados");
      
      $res = $res->result_array();

      return $res; //retorna un arreglo

   }

   public function consulta_movimientos($numero_empleado_search){

      if($numero_empleado_search == '' || $numero_empleado_search == null){ //valida el tipo de busqueda inicial o ejecutada

         $res = $this->db->query("SELECT * FROM movimientos");

      }else{

         $res = $this->db->query("SELECT * FROM movimientos where numero_empleado = '$numero_empleado_search'");

      }

      $res = $res->result_array();

      return $res;

   }

   public function guardar_empleado($txt_nombre,$txt_numero_empleado,$slc_rol,$slc_tipo_contratacion,$txt_telefono,$txt_correo,$txt_direccion){ //guarda el el regesitro en la base de datos

      $res = $this->db->query("INSERT INTO empleados(nombre, numero_empleado, rol, tipo_contratacion, fecha_contratacion, telefono, correo, direccion, estatus) values('$txt_nombre','$txt_numero_empleado','$slc_rol','$slc_tipo_contratacion',now(),'$txt_telefono','$txt_correo','$txt_direccion',1)");
   
   }

   public function guardar_movimiento($rol,$tipo_contratacion,$numero_empleado,$slc_rol_movimiento,$slc_tipo_contratacion_movimiento,$cantidad_entregas,$slc_cubrio_turno){//guarda el el regesitro en la base de datos


      $res = $this->db->query("INSERT INTO movimientos(numero_empleado, nombre_movimiento, rol, tipo_movimiento, cantidad_entregas, cubrio_turno, fecha_movimiento) values('$numero_empleado','','$rol','$tipo_contratacion','$cantidad_entregas','$slc_cubrio_turno',now())");

   }

   public function guardar_edicion_empleado($txt_id_edicion_empleado,$txt_nombre,$txt_numero_empleado,$slc_rol,$slc_tipo_contratacion,$txt_telefono,$txt_correo,$txt_direccion){//guarda los cambios en la tabla

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

   public function calcular_pago($numero_empleado_search,$rowData){  // logica para obtener el sueldo

     
      $rowData = json_decode($rowData);

      $str = '';

      foreach($rowData as $valor){


         $cantidad_entregas = $valor->cantidad_entregas;
         $cubrio_turno = $valor->cubrio_turno;
         $fecha_movimiento = $valor->fecha_movimiento;
         $id = $valor->id;
         $nombre_movimiento = $valor->nombre_movimiento;
         $numero_empleado = $valor->numero_empleado;
         $rol = $valor->rol;
         $tipo_movimiento = $valor->tipo_movimiento;

         $cuenta_dias = $this->db->query("SELECT cast(fecha_alta as date) fecha FROM configuracion_costos where id_puesto = $rol group by cast(fecha_alta as date)"); 
         
         $ndias = $cuenta_dias->result_array();
         $ndias = count($ndias);

         $res = $this->db->query("SELECT * FROM configuracion_costos where id_puesto = $rol");

         $res = $res->result_array();

         $bonos = 0;
         $sueldo = $res['0']['sueldo_base'] * $ndias;
         $entregas = $cantidad_entregas * 5;

         $impuestoISR = $res['0']['impuestoISR'];

         if($rol == 1 || $rol == 2){

            if($rol == 1){

               $bonos = $res['0']['monto_bono'] * 8; //SE DEJARON FIJAS LAS HORAS SIN CONTEMPLAR HORAS EXTRAS

            }
            if($rol == 2){

               $bonos = $res['0']['monto_bono'] * 8;

            }
            
         }else{

            if($cubrio_turno == 1){

               $rol = 1;

               if($rol == 1){ // falto definir a quien cubre en el formulario se dejo fijo al rol chofer

                  $bonos = $res['0']['monto_bono'] * 8; //SE DEJARON FIJAS LAS HORAS SIN CONTEMPLAR HORAS EXTRAS

               }
               if($rol == 2){

                  $bonos = $res['0']['monto_bono'] * 8;

               }

            }

         }

         $total_bruto = $bonos+$sueldo+$entregas;

         if($total_bruto > 16 && $ndias >= 30){ //se definio la cantidad de dias para simular un mes ya que no se especificaron rangos de fechas como filtro en la consulta

            $impuestoISR = ($total_bruto * 12)/100;

         }else{

            $impuestoISR = ($total_bruto * 9)/100;

         }

         $total = $total_bruto - $impuestoISR;

       
         
         $str = $str . "sueldo = ".$sueldo."<br>";
         $str = $str . "entregas = ".$entregas."<br>";
         $str = $str . "impuestoISR = ".$impuestoISR."<br>";
         $str = $str . "total_bruto = ".$total_bruto."<br>";
         $str = $str . "total = ".$total."<br>";

         


      }

      return $str;

   }


}
<?php
    class producto_grupo extends CI_model 
    {
            var $tabla;
        function __construct()
        {
            $this->load->database();
            $this->tabla='producto_grupo';
            # code...
        }

        public function get_all(){
            $sql="select id, nombre, (select count(*) from producto where id_grupo = id) as cantidad from producto_grupo";
            $consulta = $this->db->query($sql);
            return	$consulta->result_array();
        }
        
    }
    
?>
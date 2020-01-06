<?php
    class producto_model extends CI_model 
    {
        var $tabla;
        function __construct()
        {
            $this->load->database();
            $this->tabla='producto';
            # code...
        }

        public function get_all($id_grupo){
            $sql="select * from producto where id_grupo = ".$id_grupo.";";
            $consulta = $this->db->query($sql);
            return	$consulta->result_array();
        }
        
    }
    
?>
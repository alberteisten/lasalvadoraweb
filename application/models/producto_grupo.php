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
            $query = $this->db->get($this->tabla);
            return $query->result_array();
        }
    }
    
?>
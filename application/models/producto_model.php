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
		public function get_busqueda($clave){
			$sql= "select p.*
					from producto p
					inner join producto_grupo g on g.id = p.id_grupo
					where id_producto like '%$clave%' OR p.descripcion_facilito like '%$clave%';";            
            $consulta = $this->db->query($sql);
            return	$consulta->result_array();
		}
        
    }
    
?>

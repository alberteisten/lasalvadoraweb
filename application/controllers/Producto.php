<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		# code...
		$this->load->model('producto_grupo');
		$this->load->model('producto_model');
	}

	public function index($id_grupo = 31)
	{
		$datos['headers'] = $this->load->view('template/header','', TRUE);
        $datos['footers'] = $this->load->view('template/footer','', TRUE);
		$datos['categorias'] = $this->producto_grupo->get_all();
		$datos['productos'] = $this->producto_model->get_all($id_grupo);
		$this->load->view('producto/index',$datos);
	}
}

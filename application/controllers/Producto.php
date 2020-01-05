<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		# code...
		$this->load->model('producto_grupo');
	}

	public function index()
	{
		$data['categorias'] = $this->producto_grupo->get_all();
		$this->load->view('producto/index',$data);
	}
}

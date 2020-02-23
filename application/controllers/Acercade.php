<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acercade extends CI_Controller {

	
	public function index()
	{
		$datos['headers'] = $this->load->view('template/header','', TRUE);
		$datos['footers'] = $this->load->view('template/footer','', TRUE);
		$this->load->view('acercade/index',$datos);
		

	}
}

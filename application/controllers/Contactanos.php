<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactanos extends CI_Controller {

	
	public function sanmiguel()
	{
		$datos['headers'] = $this->load->view('template/header','', TRUE);
		$datos['footers'] = $this->load->view('template/footer','', TRUE);
		$this->load->view('contactanos/sanmiguel',$datos);
		
	}

	public function sucortega()
	{
		$datos['headers'] = $this->load->view('template/header','', TRUE);
		$datos['footers'] = $this->load->view('template/footer','', TRUE);
		$this->load->view('contactanos/sucortega',$datos);

	}

	public function succamacho()
	{
		$datos['headers'] = $this->load->view('template/header','', TRUE);
		$datos['footers'] = $this->load->view('template/footer','', TRUE);
		$this->load->view('contactanos/succamacho',$datos);
	}
}

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

	public function email()
	{
		$this->load->library('email');
		$this->email->from('lasalvadorahnossrl@gmail.com',$this->input->post('nombre'));
		//$this->email->from($this->input->post('email_consulta'));
		$this->email->to('sistemas@lasalvadorahnos.com');
		$this->email->cc('info@lasalvadorahnos.com');
		//$this->email->bcc('severo_86@hotmail.com');
		$this->email->subject('consulta de '.$this->input->post('correo'));
		$this->email->message("Celular: ".$this->input->post('celular')."\nMensaje: ".$this->input->post('mensaje')."\nCorreo: ".$this->input->post('correo')."\nTeléfono: ".$this->input->post('telefono'));
		$this->email->send();
		$sucursal=$this->input->post('sucursal');
		if($sucursal=="san miguel")
		{
		redirect(base_url()."sanmiguel");	
		}
		else
		{
			if($sucursal=="ortega")
			{
				redirect(base_url()."ortega");
			}
			else
			{
				if($sucursal=="camacho")
				{
					redirect(base_url()."camacho");
				}
				else{

					redirect(base_url());

				}

				
			}
			
		}
		
		//echo "Se envio el email exitosamente";

	}
}

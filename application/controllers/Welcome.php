<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends BS_Controller {

	
	public function index()
	{       $this->load->helper('url');
		$this->load->view('usuarios/login');
		//$this->mostrarVista('panel/secretaria/seguimientoClientes');
	}

    

}
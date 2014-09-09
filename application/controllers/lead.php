<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lead extends CI_Controller {

	public function index()
	{

		$this->load->helper('url');

		$data = array(
			'usuario' => 'Jhon Locke',
			'vista' => 'lead_crear',
			'menu' => 'lead'
			);
		
		$this->load->view('head',$data);
	}
}


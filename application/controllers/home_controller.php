<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function index()
	{

		$this->load->helper('url');
		$data = array(
		'usuario' => 'Jhon Locke',
		'vista' => 'listado',
		'menu' => ''
		);

		$this->load->view('head',$data);
	}
}


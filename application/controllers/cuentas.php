
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cuentas extends CI_Controller {

	public function index()
	{

		$this->load->helper('url');

		$data = array(
			'usuario' => 'Jhon Locke',
			'vista' => 'cuentas_listado',
			'menu' => 'lead'
			);
		
		$this->load->view('head',$data);
	}
}


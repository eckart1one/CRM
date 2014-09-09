
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oportunidad extends CI_Controller {

	public function index()
	{

		$this->load->helper('url');

		$data = array(
			'usuario' => 'Jhon Locke',
			'vista' => 'oportunidad_listado',
			'menu' => 'oportunidad'
			);
		

		//pruebas para mandar un mail
		// El mensaje
		$mensaje = "Línea 1\r\nLínea 2\r\nLínea 3";

		// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
		$mensaje = wordwrap($mensaje, 70, "\r\n");

		// Enviarlo
		mail('eckart.inv3@gmail.com', 'Mi título', $mensaje);


		$this->load->view('head',$data);
	}
}


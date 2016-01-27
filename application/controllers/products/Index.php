<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends Front_Controller
{
	private $layout;
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'products-layout';
	}

	public function index()
	{
		$this->viewData['_body'] = $this->load->view( $this->APP . '/products/index-body', array(), true);
		$this->render( $this->layout );
	}

	public function download()
	{
		$name = $this->uri->segment(3);
		$this->load->helper('download');

		//if not PayPalAdvancedNop link
		if( $name != "PayPal-advanced-nop" ) return;
		$data = time() . '-' . $this->input->ip_address() . "-" . $this->input->user_agent();
		file_put_contents( dirname(__DIR__) . '/../../public/files/PayPal-advanced-nop.log', $data, FILE_APPEND | LOCK_EX);

		$data = file_get_contents( dirname(__DIR__) .  "/../../public/files/PayPalAdvancedNop3.70.zip"); // Read the file's contents
		force_download($name . ".zip", $data);
	}

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// $this->template->add_js(base_url()."libraries/ubertable.js");
		$this->load->helper('url');
		
		$this->load->view('home');
	}
}
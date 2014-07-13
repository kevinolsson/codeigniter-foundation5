<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()	{
		// Main method
			

		$this->load->view('shared/header');
		$this->load->view('welcome_view');
		$this->load->view('shared/footer');

	}
}

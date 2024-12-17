<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $data;

	public function index()
	{
		$this->data['title'] = 'Home';
		$this->load->view('welcome_message', $this->data);
	}

	public function contact_us()
	{
		$this->data['title'] = 'Contact Us';	
		$this->load->view('contact_us', $this->data);
	}
}

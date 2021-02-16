<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index(){
		$data = [
					'meta_title' => 'Official IAESTE Ghana Website | About',
					'nameErr' => '',
				];

		$details = $this->input->post(array('name','email','msg'));

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('msg', 'Message', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('contact', $data);
			$this->load->view('templates/footer', $data);
		}else {
			redirect('contact');
		}

		
	}

	// public function send(){
	// 	$this->load->helper('form');
	// 	$this->load->library('form_validation');

	// 	$data = [
	// 				'meta_title' => 'Official IAESTE Ghana Website | About',
	// 			];

	// 	$this->form_validation->set_rules('title', 'Title', 'required');
	// 	$this->form_validation->set_rules('text', 'Text', 'required');

	// 	if ($this->form_validation->run() === FALSE)
	// 	{ 
	// 		$this->load->view('templates/header', $data);
	// 		$this->load->view('contact', $data);
	// 		$this->load->view('templates/footer', $data);

	// 	}
	// 	else
	// 	{
	
	// 		$this->load->view('templates/success');
	// 	}
	// }
	 

	// public function index()
	// {
	// 	$this->load->library('email');
	// 	$data = [
	// 		'meta_title' => 'Official IAESTE Ghana Website | About',
	// 	]; 

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('contact', $data);
    //     $this->load->view('templates/footer', $data);
	// }
}

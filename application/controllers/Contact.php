<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
    }

	public function index(){
		

		$data = [
					'meta_title' => 'Official IAESTE Ghana Website | About',
				];

		//data from forms
		$visitor_name = $this->input->post('name');
		$visitor_email = $this->input->post('email');
		$visitor_msg = $this->input->post('msg');
		
		//validate data
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('msg', 'Message', 'required');

		//Check if validation did not succeed then display page with error messages
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('contact', $data);
			$this->load->view('templates/footer', $data);
		}else {//If it is successfully validated
		
			  $email_from = $visitor_email;
			  $email_subject = "From iaeste website";
			  $email_body = $visitor_msg;

			  $to = "afyacy@gmail.com";
			  $headers = "From: IAESTE Website \r\n";
			  $headers .= "Reply-To: $email_from";

			  mail($to, $email_subject, $email_body, $headers);

			  $this->load->view('templates/success');
		}

		
	}
}
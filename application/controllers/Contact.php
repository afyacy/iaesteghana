<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    }
    public function index() {
        $this->load->helper('form');
        $this->load->view('contact');
    }

    public function send_mail() {
        $from_email = $this->input->post('email');
        $to_email = 'darkoafya@gmail.com';
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message('The email send using codeigniter library');
        //Send mail
        if($this->email->send())
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
        else
            $this->session->set_flashdata("email_sent","You have encountered an error");
        $this->load->view('contact');
    }
	 

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

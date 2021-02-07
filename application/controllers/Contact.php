<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$data = [
			'meta_title' => 'Official IAESTE Ghana Website | About',
		]; 

        $this->load->view('templates/header', $data);
        $this->load->view('contact', $data);
        $this->load->view('templates/footer', $data);
	}
}

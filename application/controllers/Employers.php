<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employers extends CI_Controller {
	public function index()
	{
		$data = [
			'meta_title' => 'Official IAESTE Ghana Website | About',
		]; 

        $this->load->view('templates/header', $data);
        $this->load->view('employers', $data);
        $this->load->view('templates/footer', $data);
	}
}

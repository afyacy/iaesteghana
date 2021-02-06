<?php namespace App\Controllers;

class Contact extends BaseController
{
	public function index()
	{
		$data = [
			'meta_title' => 'Official IAESTE Ghana Website | Contact',
		];   

		return view('contact', $data);
	}

	//--------------------------------------------------------------------

}
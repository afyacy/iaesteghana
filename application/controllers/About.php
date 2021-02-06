<?php namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
		$data = [
			'meta_title' => 'Official IAESTE Ghana Website | About',
		];   

		return view('about', $data);
	}

	//--------------------------------------------------------------------

}
<?php namespace App\Controllers;

class Employers extends BaseController
{
	public function index()
	{
		$data = [
			'meta_title' => 'Official IAESTE Ghana Website | Employers',
		];   

		return view('employers', $data);
	}

	//--------------------------------------------------------------------

}
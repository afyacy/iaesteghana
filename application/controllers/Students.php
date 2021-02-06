<?php namespace App\Controllers;

class Students extends BaseController
{
	public function index()
	{
		$data = [
			'meta_title' => 'Official IAESTE Ghana Website | Students',
		];   

		return view('students', $data);
	}

	//--------------------------------------------------------------------

}
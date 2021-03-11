<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('Common/Header');
		echo view('index');
		echo view('Common/Footer');
	}
}

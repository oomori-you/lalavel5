<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller {
	public function getIndex()
	{
		return view('welcome');
	}

	public function getHello()
	{
		return "hello world!!";
	}
}


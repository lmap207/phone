<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CenterController extends Controller
{
	public function center()
	{
		return view('home.center.center');
	}

	public function url()
	{
		return view('home.center.url');
	}

	public function ywb()
	{
		return view('home.center.ywb');
	}
}

<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class CenterController extends Controller
{
	public function center()
	{
		return view('home.center.center');
	}

	public function url()
	{
		$uid = \Session::get('id');
		$url = Url::all();

		return view('home.center.url',compact('url'));
	}

	public function ywb()
	{
		return view('home.center.ywb');
	}
}

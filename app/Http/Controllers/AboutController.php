<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
	public function __construct() {
		$this->middleware('ip');
	}
    public function index() {
    	$numbers = [1,2,3,4,5,6,7,8,9];
    	$title = "A propos";
    	// return view('pages/about', ['title' => $title]);
    	return view('pages/about', compact('title', 'numbers'));
    }
}

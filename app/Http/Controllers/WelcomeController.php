<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Render;

class WelcomeController extends Controller
{
    public function index(){
		return view('hola');
	}
}

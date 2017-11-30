<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
//use Render;

class WelcomeController extends Controller
{
    public function index(){
		return view('hola');
	}
	
	public function install(){
	    Artisan::call('migrate:fresh');
	}
}

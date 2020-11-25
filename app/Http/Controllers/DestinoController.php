<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinoController extends Controller
{
	 public function index()
    {
    	return view('3d/destino');
    }

    public function margarita()
    {
    	return view('3d/margarita-destino');
    }

    public function canaima()
    {
    	return view('3d/canaima-destino');
    }

    public function roques()
    {
    	return view('3d/los-roques-destino');
    }
}

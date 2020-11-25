<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto()
    {
    	return view('contacto-nosotros/contacto');
    }

    public function nosotros()
    {
    	return view('contacto-nosotros/nosotros');
    }   
}

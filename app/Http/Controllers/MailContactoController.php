<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use View;

class MailContactoController extends Controller
{
    public function store(Request $request)
    {
    	//dd($request->all());
        $data = $request->all();      
           	
        Mail::send('emails.email-contacto',$data, function($message){

            $message->subject('Informacion de Contacto');
            $message->to('lexustours.web@gmail.com');           
                
        });
      return View::make('contacto-nosotros/contacto');     	
    }
    
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use View;

class MailController extends Controller
{
    public function store(Request $request)
    {
    	//dd($request->all());
        $desti = $request->destino;
        $email_user = $request->email;
           	
        Mail::send('emails.contacto',$request->all(), function($message) use ($desti){

            $message->subject('Destino '. $desti);
            $message->to('lexustours.web@gmail.com');           
                
        });

        Mail::send('emails.conforme',$request->all(), function($message) use ($email_user){

            $message->subject('Lexus Tours');
            $message->to($email_user);           
           
        });           		
    		return View::make('welcome');    	
    }
    
}

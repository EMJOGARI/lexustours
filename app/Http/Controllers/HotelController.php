<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    /******************/
    /* ISLA DE COCHE */
    /******************/
    public function coche()
    {
        return view('2h/coche');
    }
    public function spb()
    {
        return view('2h/coche-hotel/sunsol_punta_blanca');
    }

     public function cp()
    {
        return view('2h/coche-hotel/coche_paradise');
    }
    /******************/
    /* ISLA MARGARITA */
    /******************/
    public function margarita()
    {
    	return view('2h/margarita');
    }

     public function hec()
    {
    	return view('2h/margarita-hotel/hesperia_eden_club');
    }

     public function portofino()
    {
    	return view('2h/margarita-hotel/portofino');
    }

     public function sic()
    {
    	return view('2h/margarita-hotel/sunsol_isla_caribe');
    }

     public function him()
    {
    	return view('2h/margarita-hotel/hesperia_isla_margarita');
    }

    public function dunes()
    {
        return view('2h/margarita-hotel/dunes');
    }

    public function hpa()
    {
        return view('2h/margarita-hotel/hesperia_playa_el_agua');
    }

     public function ldpb()
    {
        return view('2h/margarita-hotel/ld_palm_beach');
    }

     public function ldpbp()
    {
        return view('2h/margarita-hotel/ld_palm_beach_plus');
    }

      public function ldspp()
    {
        return view('2h/margarita-hotel/ld_suites_punta_playa');
    }

      public function lf()
    {
        return view('2h/margarita-hotel/le_flamboyant');
    }
      public function ikin()
    {
        return view('2h/margarita-hotel/ikin');
    }
      public function wyndham()
    {
        return view('2h/margarita-hotel/wyndham');
    }
      public function ldh()
    {
        return view('2h/margarita-hotel/ld_h2otel');
    }
      public function lidotel()
    {
        return view('2h/margarita-hotel/lidotel');
    }
      public function lad()
    {
        return view('2h/margarita-hotel/lidotel_agua_dorada');
    }
      public function tibisay()
    {
        return view('2h/margarita-hotel/tibisay');
    }

     public function kokobay()
    {
        return view('2h/margarita-hotel/kokobay');
    }
    public function venetur()
    {
        return view('2h/margarita-hotel/venetur');
    }

}

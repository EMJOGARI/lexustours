<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/** HOTELES ISLA MARGARITA **/
Route::get('2h/margarita','HotelController@margarita');
Route::get('2h/margarita-hotel/hesperia_eden_club', 'HotelController@hec');
Route::get('2h/margarita-hotel/portofino', 'HotelController@portofino');
Route::get('2h/margarita-hotel/sunsol_isla_caribe', 'HotelController@sic');
Route::get('2h/margarita-hotel/hesperia_isla_margarita', 'HotelController@him');
Route::get('2h/margarita-hotel/dunes', 'HotelController@dunes');
Route::get('2h/margarita-hotel/hesperia_playa_el_agua', 'HotelController@hpa');
Route::get('2h/margarita-hotel/ld_palm_beach', 'HotelController@ldpb');
Route::get('2h/margarita-hotel/ld_palm_beach_plus', 'HotelController@ldpbp');
Route::get('2h/margarita-hotel/ld_suites_punta_playa', 'HotelController@ldspp');
Route::get('2h/margarita-hotel/le_flamboyant', 'HotelController@lf');
Route::get('2h/margarita-hotel/ikin', 'HotelController@ikin');
Route::get('2h/margarita-hotel/wyndham', 'HotelController@wyndham');
Route::get('2h/margarita-hotel/ld_h2otel', 'HotelController@ldh');
Route::get('2h/margarita-hotel/lidotel', 'HotelController@lidotel');
Route::get('2h/margarita-hotel/lidotel_agua_dorada', 'HotelController@lad');
Route::get('2h/margarita-hotel/tibisay', 'HotelController@tibisay');
Route::get('2h/margarita-hotel/kokobay', 'HotelController@kokobay');
Route::get('2h/margarita-hotel/venetur', 'HotelController@venetur');


/** HOTELES ISLA COCHE **/
Route::get('2h/coche','HotelController@coche');
Route::get('2h/coche-hotel/sunsol_punta_blanca', 'HotelController@spb');
Route::get('2h/coche-hotel/coche_paradise', 'HotelController@cp');

/** DESTINOS **/
Route::get('3d/destino', 'DestinoController@index');
Route::get('3d/margarita-destino', 'DestinoController@margarita');
Route::get('3d/canaima-destino', 'DestinoController@canaima');
Route::get('3d/los-roques-destino', 'DestinoController@roques');

/** EXCURCIONES **/
Route::get('4e/excurciones', 'ExcurcionController@excurcion');
Route::get('4e/excurcion/exc1', 'ExcurcionController@exc1');
Route::get('4e/excurcion/exc2', 'ExcurcionController@exc2');
Route::get('4e/excurcion/exc3', 'ExcurcionController@exc3');
Route::get('4e/excurcion/exc4', 'ExcurcionController@exc4');
Route::get('4e/excurcion/exc5', 'ExcurcionController@exc5');
Route::get('4e/excurcion/exc6', 'ExcurcionController@exc6');
Route::get('4e/excurcion/exc7', 'ExcurcionController@exc7');
Route::get('4e/excurcion/exc8', 'ExcurcionController@exc8');
Route::get('4e/excurcion/exc9', 'ExcurcionController@exc9');
Route::get('4e/excurcion/exc10', 'ExcurcionController@exc10');


/** BLOG **/
Route::get('5b/blog', function () {
    return view('5b/blog');
});

/** CONTACTO - NOSOTROS - POLITICAS **/
Route::get('contacto-nosotros/contacto', 'ContactoController@contacto');
Route::get('contacto-nosotros/nosotros', 'ContactoController@nosotros');

/** MAIL **/
Route::resource('mail','MailController');
Route::resource('email','MailContactoController');
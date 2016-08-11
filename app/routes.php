<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return Redirect::to('inicio/funcion');
	return View::make('estaticas.inicio-nuevo');
});
Route::get('portafolio', function()
{
	//return Redirect::to('inicio/funcion');
	return View::make('estaticas.portafolio');
});
//vieja
/*Route::get('/', function()
{

	return View::make('estaticas.inicio');
});*/

Route::get('consultoria', function()
{
	return View::make('estaticas.consultoria');
});

Route::get('desarrollo', function()
{
	return View::make('estaticas.desarrollo');
});

Route::get('equipo', function()
{
	return View::make('estaticas.equipo');
});


Route::get('metodos', function()
{
    return View::make('estaticas.metodos');
});

Route::get('sobrebio', function(){
    return View::make('estaticas.sobre');
});
Route::get('empresa', function()
{
	return View::make('estaticas.empresa');
});

Route::get('contacto', function()
{
	$mensaje = null;
	return View::make('estaticas.contacto',array('mensaje' => $mensaje));
});
/*-------------- CAPACITACION --------------------*/

Route::get('capacitacion', 'CapacitacionController@index');

/*--------- SECCION DE DIPLOMADO ----------------*/
Route::get('Diplomados-Cursos', 'CapacitacionController@diplomados');

    /*-------------- CERTIFICADOS Y DIPLOMADOS ----------------*/

    Route::get('Certificado-BPM', 'DiplomadosController@certificadoBpm');

    Route::get('Certificado-IR', 'DiplomadosController@certificadoIr');

    Route::get('Diplomado-BPM-IR', 'DiplomadosController@diplomadoBpmIr');

    /*-------------- PAGINAS CON CONTENIDO GENERAL PARA LOS DIPLOMADOS Y CERTIFICADOS -----------------*/

    Route::get('Metodología-Enseñanza', 'DiplomadosController@metodologia');

    Route::get('Certificación-Evaluación', 'DiplomadosController@certificacion');

    Route::get('Requisitos', 'DiplomadosController@requisitos');

    Route::get('Plan-Estudio', 'DiplomadosController@plan');

    Route::get('Diplomado-Contácto', 'DiplomadosController@contacto');

/*-------- SECCION CURSOS IN COMPANY -----------*/

Route::get('Cursos-In-Company', 'CapacitacionController@cursosInCompany');

/*------------- CURSOS -------------------------*/

Route::controller('cursos', 'CursosController');

/*--------------------------------------------------*/

//FORMULARIO DE CONTACTO PARA CURSOS IN COMPANY
Route::post('mandarCorreo', array('uses' => 'HomeController@mandarEmail'));

//FORMULARIO DE CONTACTO PARA DIPLOMADOS
Route::post('CorreoDiplomado', array('uses' => 'HomeController@mandarEmailDiplomado'));

//FORMULARIO DE CONTACTO
Route::post('enviarCorreo', array('uses' => 'HomeController@sendEmail'));
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(array('prefix' => 'api'), function()
{

  Route::get('/', function () {
      return response()->json(['message' => 'Vagas API', 'status' => 'Connected']);;
  });

  Route::resource('vagas', 'VagasController');
  Route::resource('redemagic', 'RedemagicController');
});

Route::get('/', function () {
    return redirect('api');
});
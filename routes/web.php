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

// Route::get('change', function () {
//     return "OKAY";
//
// });

// Route::post('change', function () {
//     var_dump($_POST);
// });

// Route::get('controller', 'api\TheatreController@index');

// Route::post('controller', 'api\TheatreController@store');

// Route::any('controller',"api\TheatreController@store");

// Route::get('/', function () {
//     $data['name'] = '$paid';
//     return view('welcome',$data);
// });

// Route::get('controller',function (Request $request){
//   $have = $request->input('have');
//   // print(have);
//   $paid = $request->input('paid');
//   $change = $balance-$paid;
//   // $data = array(
// 	// 	'have' => $have,
//   //   'paid' => $paid
// 	// );
//   return view("welcome",$change);
// });

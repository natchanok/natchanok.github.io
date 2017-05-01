<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::resource('controller', 'api\TheatreController');

Route::get('change/{have}/{paid}','api\TheatreController@change');

// Route::post('register',function (Request $request){
//   $have = $request->input('have');
//   print(have);
//   $paid = $request->input('paid');
//   $data = array(
// 		'have' => $have
//     'paid' => $paid
// 	);
//   return view("welcome",$data);
// });

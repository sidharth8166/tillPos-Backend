<?php
use Illuminate\Support\Facades\DB;

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

//\URL::forceSchema('https');

Route::post('/addCentre' , 'adminController@addCentre');
Route::post('/addCentrePicture' , 'adminController@addCentrePicture');
Route::post('/phoneVerification' , 'adminController@phoneVerification');
// Route::post('/register' , 'adminController@createUser');
Route::get('/getDashboardData' , 'adminController@getDashboardData');
//Route::post('/login', 'AuthController@login');


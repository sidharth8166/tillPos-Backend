<?php


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

Route::post('/register' , [
    'uses' => 'UserController@register'
]);

Route::post('/login' , [
    'uses' => 'UserController@login'
]);

Route::get('/getUser' , [
    'uses' => 'UserController@getUser',
    'middleware' => 'auth.jwt'
]);

Route::post('/updateProfile' , [
    'uses' => 'UserController@updateProfile',
    'middleware' => 'auth.jwt'
]);

Route::post('/changePassword' , [
    'uses'=> 'UserController@changePassword',
    'middleware' => 'auth.jwt'
]);


Route::post('/addProfilePic', [
    'uses'=> 'adminController@addProfilePic',
    'middleware' => 'auth.jwt'
]);

Route::post('/addMember' , [
    'uses' => 'adminController@addMember',
    'middleware' => 'auth.jwt'
]);

Route::get('/getAllMembers' , [
    'uses' => 'adminController@getAllMembers',
    'middleware' => 'auth.jwt'
]);

Route::post('/getMemberData' , [
    'uses' => 'adminController@getMemberData',
    'middleware' => 'auth.jwt'
]);

Route::post('/deleteMember' , [
    'uses' => 'adminController@deleteMember',
    'middleware' => 'auth.jwt'
]);

Route::post('/updateMemberData' , [
    'uses' => 'adminController@updateMemberData',
    'middleware'=> 'auth.jwt'
]);

Route::post('/updateInstructorPic' , [
    'uses' => 'adminController@updateInstructorPic',
    'middleware' => 'auth.jwt'
]);





Route::post('/logout' , [
    'uses' => 'UserController@logout'
]);





// Frontend api's
Route::get('/getAllData' , [
    'uses' => 'frontController@getAllData'
]);
?>



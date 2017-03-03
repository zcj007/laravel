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

//Route::get('/', function () {
//    return view('auth.login');
//
//
//});
Route::get('/','admin\LoginController@login');
Route::post('/dologin','admin\LoginController@dologin');
Route::group(['middleware'=>'login'],function(){

    Route::get('/logout','admin\LoginController@logout');
    Route::get('/logadd','admin\LoginController@add');
    Route::post('/doadd','admin\LoginController@doadd');
    Route::get('/logindex','admin\LoginController@logindex');
    Route::get('/ajax','admin\LoginController@ajax');


    Route::get('/test','admin\UserController@index');
    Route::get('/add','admin\UserController@add');
    Route::post('/insert','admin\UserController@insert');
    Route::get('/select','admin\UserController@select');
    Route::get('/edit/{id}','admin\UserController@edit');
    Route::post('/update/{u}','admin\UserController@update');
    Route::get('/del/{de}','admin\UserController@del');

});

//Route::get('/test','TestController@index')->name('tr');//bie ming
//Route::get('/t','TestController@show');
//Route::get('api/users/{user}', function (App\User $user) {
//    return $user->email;
//});
//Route::resource('good','GoodController', ['names' => [
//
//    'create' => 'good.c'//对方法名重定义
//
//]]);

//Route::get('/aaaa','HhController@index');


//Route::get('/404',function(){
//
//    return abort('welcome');
//});






//Route::controller('/test','admin/UserController');

//Route::match(['get','post'],function(){
//
//});
//Route::any(['get','post'],function(){
//
//});
//{{csrf_field}};
//<input type='hidden' name='_token' value="">
//Route::get('/aa/{id}',function($id){
//    echo $id;
//});



Auth::routes();

Route::get('/home', 'HomeController@index');

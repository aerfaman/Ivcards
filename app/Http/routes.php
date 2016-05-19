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
Route::get('/', 'HomeController@index');
Route::controller('user', 'people\UserController');
Route::get('card/create/{templateName}','cards\CreateController@index');
Route::get('card/template/{templateName}/','cards\CreateController@template');
Route::get('/captcha/{tmp}','captchaController@captcha');
Route::get('/mail',function(){
	Mail::send('email', ['name'=>'qingye'], function($message)
	{
    $message->to('aerfaman@163.com', 'aerfaman')->subject('欢迎注册我们的网站，请激活您的账号！');
	});

});


<?php

/*
|--------------------------------------------------------------------------
| Application Routes   HL
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//网站首页路由
Route::get('/', function () 
{
    return view('welcome');
});


Route::get("/admin","admin\IndexController@index");




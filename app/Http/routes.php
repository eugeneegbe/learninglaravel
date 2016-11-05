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

Route::get('/', function () {

    return 'Hello welcome to my first app';

});

Route::get('/about' , function (){

    return " This is our About Page";

});

Route::get('/contact' , function (){

    return "This is Our contact Page";
});

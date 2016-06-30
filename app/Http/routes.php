<?php
Route::group(['middleware' => ['web']], function () {
    //注册认证授权相关的controller
    Route::auth();
    Route::get('/home', 'HomeController@index');
    
});
Route::get('/',  'WelcomeController@index');



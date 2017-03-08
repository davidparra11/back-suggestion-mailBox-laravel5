<?php
 
//Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
  //  Route::resource('person', 'FormController', ['except' => [
    //    'create', 'edit'
   // ]]);
//});





Route::post('/laravel/public/person', 'FormController@show');








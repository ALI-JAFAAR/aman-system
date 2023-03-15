<?php

use Illuminate\Support\Facades\Route;

####################### LOGIN ROUTE #########################


    Route::get('/login', 'MainController@login')->name('login');


    Route::post('/login','MainController@check_login');


##############################################################

Route::group(['middleware' => 'auth:web'],function(){

#######################################################

    // Main Routes
    
    ################################################################################################
        
        Route::get('/'             ,'MainController@index')->name('index'); 

        Route::get('/logout'       ,'MainController@logout')->name('logout');
    
    ################################################################################################

    
#######################################################

});
    
























Route::get('/photo', function () { 
        Artisan::call('storage:link'); 
    }
);


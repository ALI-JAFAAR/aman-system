<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('checkers'             ,'MainController@index_checker')->name('index-checker');
    // ADMIN Customer

    #############################################################################################

        Route::get ( 'cus'                  , 'Checker\Cus@index'       )->name('cus');
        Route::get ( 'cus-org/{id}/{id2}'   , 'Checker\Cus@create_org'  )->name('cus-org');
        Route::post( 'cus-org/{id}/{id2}'   , 'Checker\Cus@save'        )->name('cus-org-save');
        Route::get ( 'cus-guild/{id}/{id2}' , 'Checker\Cus@create_guild')->name('cus-guild');
        Route::post( 'cus-guild/{id}/{id2}' , 'Checker\Cus@save'        )->name('cus-guild-save');
        
        Route::post( 'cus'                  , 'Checker\Cus@save'        )->name('cus-save');

        Route::get ( 'cus-table-show'       , 'Checker\Cus@show'        )->name('cus-table');
        Route::post( 'cus-table-show'       , 'Checker\Cus@show'        )->name('cus-table-post');
        Route::get ( 'cus-grid-show'        , 'Checker\Cus@showgrid'    )->name('cus-grid');
        Route::post( 'cus-grid-show'        , 'Checker\Cus@showgrid'    )->name('cus-grid-post');
     
        Route::get ( 'cus-view/{id}'        , 'Checker\Cus@view'        )->name('cus-view');
        Route::post( 'cus-view/{id}'        , 'Checker\Cus@edit'        )->name('cus-edit');
        
        Route::get ( 'cus-del/{id}'         , 'Checker\Cus@del'         )->name('cus-del');
        Route::get ( 'cus-del-imgs/{id}'    , 'Checker\Cus@del_imgs'    )->name('cus-del-imgs');
        Route::get ( 'cus-single/{id}'      , 'Checker\Cus@cus_single'  )->name('cus-single');

        Route::get ( 'cus-print/{id}'      , 'Checker\Cus@print'        )->name('cus-print');
        
        // Accountaing start here when the print action is taken

        Route::get ( 'cus-status-print/{id}', 'Checker\Cus@change_status_print'    )->name('cus-status-print');
    
    #############################################################################################

###################################


});
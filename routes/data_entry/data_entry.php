<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('data-entry'             ,'MainController@index_data_entry')->name('index-data_entry');
    // ADMIN Customer

    #############################################################################################

        Route::get ( 'cus'                  , 'DataEntry\Cus@index'       )->name('cus');
        Route::get ( 'cus-org/{id}/{id2}'   , 'DataEntry\Cus@create_org'  )->name('cus-org');
        Route::post( 'cus-org/{id}/{id2}'   , 'DataEntry\Cus@save'        )->name('cus-org-save');
        Route::get ( 'cus-guild/{id}/{id2}' , 'DataEntry\Cus@create_guild')->name('cus-guild');
        Route::post( 'cus-guild/{id}/{id2}' , 'DataEntry\Cus@save'        )->name('cus-guild-save');
        
        Route::post( 'cus'                  , 'DataEntry\Cus@save'        )->name('cus-save');

        Route::get ( 'cus-table-show'       , 'DataEntry\Cus@show'        )->name('cus-table');
        Route::post( 'cus-table-show'       , 'DataEntry\Cus@show'        )->name('cus-table-post');
        Route::get ( 'cus-grid-show'        , 'DataEntry\Cus@showgrid'    )->name('cus-grid');
        Route::post( 'cus-grid-show'        , 'DataEntry\Cus@showgrid'    )->name('cus-grid-post');
     
        Route::get ( 'cus-view/{id}'        , 'DataEntry\Cus@view'        )->name('cus-view');
        Route::post( 'cus-view/{id}'        , 'DataEntry\Cus@edit'        )->name('cus-edit');
        
        Route::get ( 'cus-del/{id}'         , 'DataEntry\Cus@del'         )->name('cus-del');
        Route::get ( 'cus-del-imgs/{id}'    , 'DataEntry\Cus@del_imgs'    )->name('cus-del-imgs');
        Route::get ( 'cus-single/{id}'      , 'DataEntry\Cus@cus_single'  )->name('cus-single');

        Route::get ( 'cus-print/{id}'      , 'DataEntry\Cus@print'        )->name('cus-print');
        
        // Accountaing start here when the print action is taken

        Route::get ( 'cus-status-print/{id}', 'DataEntry\Cus@change_status_print'    )->name('cus-status-print');
    
    #############################################################################################

###################################


});
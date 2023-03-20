<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('checker'             ,'MainController@index_checker')->name('index-checker');
    // checker Customer

    #############################################################################################

        Route::get ( 'checker-cus'                  , 'DataEntry\Cus@index'       )->name('checker.cus');
        Route::get ( 'checker-cus-org/{id}/{id2}'   , 'DataEntry\Cus@create_org'  )->name('checker.cus-org');
        Route::post( 'checker-cus-org/{id}/{id2}'   , 'DataEntry\Cus@save'        )->name('checker.cus-org-save');
        Route::get ( 'checker-cus-guild/{id}/{id2}' , 'DataEntry\Cus@create_guild')->name('checker.cus-guild');
        Route::post( 'checker-cus-guild/{id}/{id2}' , 'DataEntry\Cus@save'        )->name('checker.cus-guild-save');
        Route::post( 'checker-cus'                  , 'DataEntry\Cus@save'        )->name('checker.cus-save');
        Route::get ( 'checker-cus-table-show'       , 'DataEntry\Cus@show'        )->name('checker.cus-table');
        Route::post( 'checker-cus-table-show'       , 'DataEntry\Cus@show'        )->name('checker.cus-table-post');
        Route::get ( 'checker-cus-grid-show'        , 'DataEntry\Cus@showgrid'    )->name('checker.cus-grid');
        Route::post( 'checker-cus-grid-show'        , 'DataEntry\Cus@showgrid'    )->name('checker.cus-grid-post');
        Route::get ( 'checker-cus-view/{id}'        , 'DataEntry\Cus@view'        )->name('checker.cus-view');
        Route::post( 'checker-cus-view/{id}'        , 'DataEntry\Cus@edit'        )->name('checker.cus-edit');
        Route::get ( 'checker-cus-del/{id}'         , 'DataEntry\Cus@del'         )->name('checker.cus-del');
        Route::get ( 'checker-cus-del-imgs/{id}'    , 'DataEntry\Cus@del_imgs'    )->name('checker.cus-del-imgs');
        Route::get ( 'checker-cus-single/{id}'      , 'DataEntry\Cus@cus_single'  )->name('checker.cus-single');
        Route::get ( 'checker-cus-print/{id}'      , 'DataEntry\Cus@print'        )->name('checker.cus-print');
        Route::get ( 'checker-cus-status-print/{id}', 'DataEntry\Cus@change_status_print'    )->name('checker.cus-status-print');
    
    #############################################################################################

###################################


});
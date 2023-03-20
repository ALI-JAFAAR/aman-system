<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('data-entry'             ,'MainController@index_data_entry')->name('index-data_entry');
    // data_entry Customer

    #############################################################################################

        Route::get ( 'data_entry-cus'                  , 'DataEntry\Cus@index'       )->name('data_entry.cus');
        Route::get ( 'data_entry-cus-org/{id}/{id2}'   , 'DataEntry\Cus@create_org'  )->name('data_entry.cus-org');
        Route::post( 'data_entry-cus-org/{id}/{id2}'   , 'DataEntry\Cus@save'        )->name('data_entry.cus-org-save');
        Route::get ( 'data_entry-cus-guild/{id}/{id2}' , 'DataEntry\Cus@create_guild')->name('data_entry.cus-guild');
        Route::post( 'data_entry-cus-guild/{id}/{id2}' , 'DataEntry\Cus@save'        )->name('data_entry.cus-guild-save');
        Route::post( 'data_entry-cus'                  , 'DataEntry\Cus@save'        )->name('data_entry.cus-save');
        Route::get ( 'data_entry-cus-table-show'       , 'DataEntry\Cus@show'        )->name('data_entry.cus-table');
        Route::post( 'data_entry-cus-table-show'       , 'DataEntry\Cus@show'        )->name('data_entry.cus-table-post');
        Route::get ( 'data_entry-cus-grid-show'        , 'DataEntry\Cus@showgrid'    )->name('data_entry.cus-grid');
        Route::post( 'data_entry-cus-grid-show'        , 'DataEntry\Cus@showgrid'    )->name('data_entry.cus-grid-post');
        Route::get ( 'data_entry-cus-view/{id}'        , 'DataEntry\Cus@view'        )->name('data_entry.cus-view');
        Route::post( 'data_entry-cus-view/{id}'        , 'DataEntry\Cus@edit'        )->name('data_entry.cus-edit');
        Route::get ( 'data_entry-cus-del/{id}'         , 'DataEntry\Cus@del'         )->name('data_entry.cus-del');
        Route::get ( 'data_entry-cus-del-imgs/{id}'    , 'DataEntry\Cus@del_imgs'    )->name('data_entry.cus-del-imgs');
        Route::get ( 'data_entry-cus-single/{id}'      , 'DataEntry\Cus@cus_single'  )->name('data_entry.cus-single');
        Route::get ( 'data_entry-cus-print/{id}'      , 'DataEntry\Cus@print'        )->name('data_entry.cus-print');
        Route::get ( 'data_entry-cus-status-print/{id}', 'DataEntry\Cus@change_status_print'    )->name('data_entry.cus-status-print');
    
    #############################################################################################

###################################


});
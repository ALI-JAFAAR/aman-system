<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('merchant'             ,'MainController@index_merchant')->name('index-merchant');
    // merchant Customer

    #############################################################################################

        Route::get ( 'merchant-cus'                  , 'DataEntry\Cus@index'       )->name('merchant.cus');
        Route::get ( 'merchant-cus-org/{id}/{id2}'   , 'DataEntry\Cus@create_org'  )->name('merchant.cus-org');
        Route::post( 'merchant-cus-org/{id}/{id2}'   , 'DataEntry\Cus@save'        )->name('merchant.cus-org-save');
        Route::get ( 'merchant-cus-guild/{id}/{id2}' , 'DataEntry\Cus@create_guild')->name('merchant.cus-guild');
        Route::post( 'merchant-cus-guild/{id}/{id2}' , 'DataEntry\Cus@save'        )->name('merchant.cus-guild-save');
        Route::post( 'merchant-cus'                  , 'DataEntry\Cus@save'        )->name('merchant.cus-save');
        Route::get ( 'merchant-cus-table-show'       , 'DataEntry\Cus@show'        )->name('merchant.cus-table');
        Route::post( 'merchant-cus-table-show'       , 'DataEntry\Cus@show'        )->name('merchant.cus-table-post');
        Route::get ( 'merchant-cus-grid-show'        , 'DataEntry\Cus@showgrid'    )->name('merchant.cus-grid');
        Route::post( 'merchant-cus-grid-show'        , 'DataEntry\Cus@showgrid'    )->name('merchant.cus-grid-post');
        Route::get ( 'merchant-cus-view/{id}'        , 'DataEntry\Cus@view'        )->name('merchant.cus-view');
        Route::post( 'merchant-cus-view/{id}'        , 'DataEntry\Cus@edit'        )->name('merchant.cus-edit'); 
        Route::get ( 'merchant-cus-del/{id}'         , 'DataEntry\Cus@del'         )->name('merchant.cus-del');
        Route::get ( 'merchant-cus-del-imgs/{id}'    , 'DataEntry\Cus@del_imgs'    )->name('merchant.cus-del-imgs');
        Route::get ( 'merchant-cus-single/{id}'      , 'DataEntry\Cus@cus_single'  )->name('merchant.cus-single');
        Route::get ( 'merchant-cus-print/{id}'      , 'DataEntry\Cus@print'        )->name('merchant.cus-print');
        Route::get ( 'merchant-cus-status-print/{id}', 'DataEntry\Cus@change_status_print'    )->name('merchant.cus-status-print');
    
    #############################################################################################

###################################


});
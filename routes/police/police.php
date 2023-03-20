<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('police'             ,'MainController@index_police')->name('index-police');
    // police Customer

    #############################################################################################

        Route::get ( 'police-cus'                  , 'DataEntry\Cus@index'       )->name('police.cus');
        Route::get ( 'police-cus-org/{id}/{id2}'   , 'DataEntry\Cus@create_org'  )->name('police.cus-org');
        Route::post( 'police-cus-org/{id}/{id2}'   , 'DataEntry\Cus@save'        )->name('police.cus-org-save');
        Route::get ( 'police-cus-guild/{id}/{id2}' , 'DataEntry\Cus@create_guild')->name('police.cus-guild');
        Route::post( 'police-cus-guild/{id}/{id2}' , 'DataEntry\Cus@save'        )->name('police.cus-guild-save');
        Route::post( 'police-cus'                  , 'DataEntry\Cus@save'        )->name('police.cus-save');
        Route::get ( 'police-cus-table-show'       , 'DataEntry\Cus@show'        )->name('police.cus-table');
        Route::post( 'police-cus-table-show'       , 'DataEntry\Cus@show'        )->name('police.cus-table-post');
        Route::get ( 'police-cus-grid-show'        , 'DataEntry\Cus@showgrid'    )->name('police.cus-grid');
        Route::post( 'police-cus-grid-show'        , 'DataEntry\Cus@showgrid'    )->name('police.cus-grid-post');
        Route::get ( 'police-cus-view/{id}'        , 'DataEntry\Cus@view'        )->name('police.cus-view');
        Route::post( 'police-cus-view/{id}'        , 'DataEntry\Cus@edit'        )->name('police.cus-edit');
        Route::get ( 'police-cus-del/{id}'         , 'DataEntry\Cus@del'         )->name('police.cus-del');
        Route::get ( 'police-cus-del-imgs/{id}'    , 'DataEntry\Cus@del_imgs'    )->name('police.cus-del-imgs');
        Route::get ( 'police-cus-single/{id}'      , 'DataEntry\Cus@cus_single'  )->name('police.cus-single');
        Route::get ( 'police-cus-print/{id}'      , 'DataEntry\Cus@print'        )->name('police.cus-print');
        Route::get ( 'police-cus-status-print/{id}', 'DataEntry\Cus@change_status_print'    )->name('police.cus-status-print');
    
    #############################################################################################

###################################


});
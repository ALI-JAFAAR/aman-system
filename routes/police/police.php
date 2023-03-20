<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('polices'             ,'MainController@index_police')->name('index-police');
    // ADMIN Customer

    #############################################################################################

        Route::get ( 'cus'                  , 'Police\Cus@index'       )->name('cus');
        Route::get ( 'cus-org/{id}/{id2}'   , 'Police\Cus@create_org'  )->name('cus-org');
        Route::post( 'cus-org/{id}/{id2}'   , 'Police\Cus@save'        )->name('cus-org-save');
        Route::get ( 'cus-guild/{id}/{id2}' , 'Police\Cus@create_guild')->name('cus-guild');
        Route::post( 'cus-guild/{id}/{id2}' , 'Police\Cus@save'        )->name('cus-guild-save');
        Route::post( 'cus'                  , 'Police\Cus@save'        )->name('cus-save');
        Route::get ( 'cus-table-show'       , 'Police\Cus@show'        )->name('cus-table');
        Route::post( 'cus-table-show'       , 'Police\Cus@show'        )->name('cus-table-post');
        Route::get ( 'cus-grid-show'        , 'Police\Cus@showgrid'    )->name('cus-grid');
        Route::post( 'cus-grid-show'        , 'Police\Cus@showgrid'    )->name('cus-grid-post');
        Route::get ( 'cus-view/{id}'        , 'Police\Cus@view'        )->name('cus-view');
        Route::post( 'cus-view/{id}'        , 'Police\Cus@edit'        )->name('cus-edit');
        Route::get ( 'cus-del/{id}'         , 'Police\Cus@del'         )->name('cus-del');
        Route::get ( 'cus-del-imgs/{id}'    , 'Police\Cus@del_imgs'    )->name('cus-del-imgs');
        Route::get ( 'cus-single/{id}'      , 'Police\Cus@cus_single'  )->name('cus-single');
        Route::get ( 'cus-print/{id}'       , 'Police\Cus@print'        )->name('cus-print');
        Route::get ( 'cus-status-print/{id}', 'Police\Cus@change_status_print'    )->name('cus-status-print');
    
    #############################################################################################

###################################


});
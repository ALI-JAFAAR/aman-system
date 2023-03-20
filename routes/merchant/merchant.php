<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('merchants'             ,'MainController@index_merchant')->name('index-merchant');
    // ADMIN Customer

    #############################################################################################

        Route::get ( 'cus'                  , 'Merchant\Cus@index'       )->name('cus');
        Route::get ( 'cus-org/{id}/{id2}'   , 'Merchant\Cus@create_org'  )->name('cus-org');
        Route::post( 'cus-org/{id}/{id2}'   , 'Merchant\Cus@save'        )->name('cus-org-save');
        Route::get ( 'cus-guild/{id}/{id2}' , 'Merchant\Cus@create_guild')->name('cus-guild');
        Route::post( 'cus-guild/{id}/{id2}' , 'Merchant\Cus@save'        )->name('cus-guild-save');
        Route::post( 'cus'                  , 'Merchant\Cus@save'        )->name('cus-save');
        Route::get ( 'cus-table-show'       , 'Merchant\Cus@show'        )->name('cus-table');
        Route::post( 'cus-table-show'       , 'Merchant\Cus@show'        )->name('cus-table-post');
        Route::get ( 'cus-grid-show'        , 'Merchant\Cus@showgrid'    )->name('cus-grid');
        Route::post( 'cus-grid-show'        , 'Merchant\Cus@showgrid'    )->name('cus-grid-post');
        Route::get ( 'cus-view/{id}'        , 'Merchant\Cus@view'        )->name('cus-view');
        Route::post( 'cus-view/{id}'        , 'Merchant\Cus@edit'        )->name('cus-edit');
        Route::get ( 'cus-del/{id}'         , 'Merchant\Cus@del'         )->name('cus-del');
        Route::get ( 'cus-del-imgs/{id}'    , 'Merchant\Cus@del_imgs'    )->name('cus-del-imgs');
        Route::get ( 'cus-single/{id}'      , 'Merchant\Cus@cus_single'  )->name('cus-single');
        Route::get ( 'cus-print/{id}'       , 'Merchant\Cus@print'        )->name('cus-print');
        Route::get ( 'cus-status-print/{id}', 'Merchant\Cus@change_status_print'    )->name('cus-status-print');
    
    #############################################################################################

###################################


});
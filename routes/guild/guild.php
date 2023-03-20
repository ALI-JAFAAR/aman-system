<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('guild'             ,'MainController@index_guild')->name('index-guild');
    // ADMIN Guilds

    #############################################################################################

        Route::get( 'guild'           , 'Guild\Guilds@index')->name('guild');
        Route::post('guild'           , 'Guild\Guilds@save' )->name('guild-save');
        Route::get( 'guild-show'      , 'Guild\Guilds@show' )->name('guild-show');
        Route::get( 'guild-view/{id}' , 'Guild\Guilds@view' )->name('guild-view');
        Route::post('guild-view/{id}' , 'Guild\Guilds@edit' )->name('guild-edit');
        Route::get( 'guild-del/{id}'  , 'Guild\Guilds@del'  )->name('guild-del');

    #############################################################################################

    // ADMIN Activity

    #############################################################################################

        Route::get( 'acitivty'           , 'Guild\Activities@index')->name('acitivty');
        Route::post('acitivty'           , 'Guild\Activities@save' )->name('acitivty-save');
        Route::get( 'acitivty-show'      , 'Guild\Activities@show' )->name('acitivty-show');
        Route::get( 'acitivty-view/{id}' , 'Guild\Activities@view' )->name('acitivty-view');
        Route::post('acitivty-view/{id}' , 'Guild\Activities@edit' )->name('acitivty-edit');
        Route::get( 'acitivty-del/{id}'  , 'Guild\Activities@del'  )->name('acitivty-del');

    #############################################################################################

    // ADMIN GuildSubs

    #############################################################################################

        Route::get( 'guildsub'           , 'Guild\GuildSubs@index')->name('guildsub');
        Route::post('guildsub'           , 'Guild\GuildSubs@save' )->name('guildsub-save');
        Route::get( 'guildsub-show'      , 'Guild\GuildSubs@show' )->name('guildsub-show');
        Route::get( 'guildsub-view/{id}' , 'Guild\GuildSubs@view' )->name('guildsub-view');
        Route::post('guildsub-view/{id}' , 'Guild\GuildSubs@edit' )->name('guildsub-edit');
        Route::get( 'guildsub-del/{id}'  , 'Guild\GuildSubs@del'  )->name('guildsub-del');

    #############################################################################################

    // ADMIN Customer

    #############################################################################################

        Route::get ( 'cus'                  , 'Guild\Cus@index'       )->name('cus');
        Route::get ( 'cus-org/{id}/{id2}'   , 'Guild\Cus@create_org'  )->name('cus-org');
        Route::post( 'cus-org/{id}/{id2}'   , 'Guild\Cus@save'        )->name('cus-org-save');
        Route::get ( 'cus-guild/{id}/{id2}' , 'Guild\Cus@create_guild')->name('cus-guild');
        Route::post( 'cus-guild/{id}/{id2}' , 'Guild\Cus@save'        )->name('cus-guild-save');
        Route::post( 'cus'                  , 'Guild\Cus@save'        )->name('cus-save');
        Route::get ( 'cus-table-show'       , 'Guild\Cus@show'        )->name('cus-table');
        Route::post( 'cus-table-show'       , 'Guild\Cus@show'        )->name('cus-table-post');
        Route::get ( 'cus-grid-show'        , 'Guild\Cus@showgrid'    )->name('cus-grid');
        Route::post( 'cus-grid-show'        , 'Guild\Cus@showgrid'    )->name('cus-grid-post');
        Route::get ( 'cus-view/{id}'        , 'Guild\Cus@view'        )->name('cus-view');
        Route::post( 'cus-view/{id}'        , 'Guild\Cus@edit'        )->name('cus-edit');
        Route::get ( 'cus-del/{id}'         , 'Guild\Cus@del'         )->name('cus-del');
        Route::get ( 'cus-del-imgs/{id}'    , 'Guild\Cus@del_imgs'    )->name('cus-del-imgs');
        Route::get ( 'cus-single/{id}'      , 'Guild\Cus@cus_single'  )->name('cus-single');
        Route::get ( 'cus-print/{id}'       , 'Guild\Cus@print'        )->name('cus-print');
        
        // Accountaing start here when the print action is taken


        Route::get ( 'cus-status-print/{id}', 'Guild\Cus@change_status_print'    )->name('cus-status-print');
        
    #############################################################################################

###################################


});
<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('guild'             ,'MainController@index_guild')->name('index-guild');
    // ADMIN Guilds

    #############################################################################################

        Route::get( 'guild-guild'           , 'Guild\Guilds@index')->name('guild.guild');
        Route::post('guild-guild'           , 'Guild\Guilds@save' )->name('guild.guild-save');
        Route::get( 'guild-guild-show'      , 'Guild\Guilds@show' )->name('guild.guild-show');
        Route::get( 'guild-guild-view/{id}' , 'Guild\Guilds@view' )->name('guild.guild-view');
        Route::post('guild-guild-view/{id}' , 'Guild\Guilds@edit' )->name('guild.guild-edit');
        Route::get( 'guild-guild-del/{id}'  , 'Guild\Guilds@del'  )->name('guild.guild-del');

    #############################################################################################

    // ADMIN Activity

    #############################################################################################

        Route::get( 'guild-acitivty'           , 'Guild\Activities@index')->name('guild.acitivty');
        Route::post('guild-acitivty'           , 'Guild\Activities@save' )->name('guild.acitivty-save');
        Route::get( 'guild-acitivty-show'      , 'Guild\Activities@show' )->name('guild.acitivty-show');
        Route::get( 'guild-acitivty-view/{id}' , 'Guild\Activities@view' )->name('guild.acitivty-view');
        Route::post('guild-acitivty-view/{id}' , 'Guild\Activities@edit' )->name('guild.acitivty-edit');
        Route::get( 'guild-acitivty-del/{id}'  , 'Guild\Activities@del'  )->name('guild.acitivty-del');

    #############################################################################################

    // ADMIN GuildSubs

    #############################################################################################

        Route::get( 'guild-guildsub'           , 'Guild\GuildSubs@index')->name('guild.guildsub');
        Route::post('guild-guildsub'           , 'Guild\GuildSubs@save' )->name('guild.guildsub-save');
        Route::get( 'guild-guildsub-show'      , 'Guild\GuildSubs@show' )->name('guild.guildsub-show');
        Route::get( 'guild-guildsub-view/{id}' , 'Guild\GuildSubs@view' )->name('guild.guildsub-view');
        Route::post('guild-guildsub-view/{id}' , 'Guild\GuildSubs@edit' )->name('guild.guildsub-edit');
        Route::get( 'guild-guildsub-del/{id}'  , 'Guild\GuildSubs@del'  )->name('guild.guildsub-del');

    #############################################################################################

    // ADMIN Customer

    #############################################################################################

        Route::get ( 'guild-cus'                  , 'Guild\Cus@index'       )->name('guild.cus');
        Route::get ( 'guild-cus-org/{id}/{id2}'   , 'Guild\Cus@create_org'  )->name('guild.cus-org');
        Route::post( 'guild-cus-org/{id}/{id2}'   , 'Guild\Cus@save'        )->name('guild.cus-org-save');
        Route::get ( 'guild-cus-guild/{id}/{id2}' , 'Guild\Cus@create_guild')->name('guild.cus-guild');
        Route::post( 'guild-cus-guild/{id}/{id2}' , 'Guild\Cus@save'        )->name('guild.cus-guild-save');
        Route::post( 'guild-cus'                  , 'Guild\Cus@save'        )->name('guild.cus-save');
        Route::get ( 'guild-cus-table-show'       , 'Guild\Cus@show'        )->name('guild.cus-table');
        Route::post( 'guild-cus-table-show'       , 'Guild\Cus@show'        )->name('guild.cus-table-post');
        Route::get ( 'guild-cus-grid-show'        , 'Guild\Cus@showgrid'    )->name('guild.cus-grid');
        Route::post( 'guild-cus-grid-show'        , 'Guild\Cus@showgrid'    )->name('guild.cus-grid-post');
        Route::get ( 'guild-cus-view/{id}'        , 'Guild\Cus@view'        )->name('guild.cus-view');
        Route::post( 'guild-cus-view/{id}'        , 'Guild\Cus@edit'        )->name('guild.cus-edit');
        Route::get ( 'guild-cus-del/{id}'         , 'Guild\Cus@del'         )->name('guild.cus-del');
        Route::get ( 'guild-cus-del-imgs/{id}'    , 'Guild\Cus@del_imgs'    )->name('guild.cus-del-imgs');
        Route::get ( 'guild-cus-single/{id}'      , 'Guild\Cus@cus_single'  )->name('guild.cus-single');
        Route::get ( 'guild-cus-print/{id}'       , 'Guild\Cus@print'       )->name('guild.cus-print');
        Route::get ( 'guild-cus-status-print/{id}', 'Guild\Cus@change_status_print'    )->name('guild.cus-status-print');
        
    #############################################################################################

###################################


});
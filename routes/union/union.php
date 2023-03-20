<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('unions'             ,'MainController@index_union')->name('index-union');
    // ADMIN UNION 

    #############################################################################################

        Route::get( 'union-union'           , 'Union\Unions@index')->name('union.union');
        Route::post('union-union'           , 'Union\Unions@save' )->name('union.union-save');
        Route::get( 'union-union-show'      , 'Union\Unions@show' )->name('union.union-show');
        Route::get( 'union-union-view/{id}' , 'Union\Unions@view' )->name('union.union-view');
        Route::post('union-union-view/{id}' , 'Union\Unions@edit' )->name('union.union-edit');
        Route::get( 'union-union-del/{id}'  , 'Union\Unions@del'  )->name('union.union-del');

    #############################################################################################

    // ADMIN Guilds

    #############################################################################################

        Route::get( 'union-guild'           , 'Union\Guilds@index')->name('union.guild');
        Route::post('union-guild'           , 'Union\Guilds@save' )->name('union.guild-save');
        Route::get( 'union-guild-show'      , 'Union\Guilds@show' )->name('union.guild-show');
        Route::get( 'union-guild-view/{id}' , 'Union\Guilds@view' )->name('union.guild-view');
        Route::post('union-guild-view/{id}' , 'Union\Guilds@edit' )->name('union.guild-edit');
        Route::get( 'union-guild-del/{id}'  , 'Union\Guilds@del'  )->name('union.guild-del');

    #############################################################################################

    // ADMIN Activity

    #############################################################################################

        Route::get( 'union-acitivty'           , 'Union\Activities@index')->name('union.acitivty');
        Route::post('union-acitivty'           , 'Union\Activities@save' )->name('union.acitivty-save');
        Route::get( 'union-acitivty-show'      , 'Union\Activities@show' )->name('union.acitivty-show');
        Route::get( 'union-acitivty-view/{id}' , 'Union\Activities@view' )->name('union.acitivty-view');
        Route::post('union-acitivty-view/{id}' , 'Union\Activities@edit' )->name('union.acitivty-edit');
        Route::get( 'union-acitivty-del/{id}'  , 'Union\Activities@del'  )->name('union.acitivty-del');

    #############################################################################################

    // ADMIN GuildSubs

    #############################################################################################

        Route::get( 'union-guildsub'           , 'Union\GuildSubs@index')->name('union.guildsub');
        Route::post('union-guildsub'           , 'Union\GuildSubs@save' )->name('union.guildsub-save');
        Route::get( 'union-guildsub-show'      , 'Union\GuildSubs@show' )->name('union.guildsub-show');
        Route::get( 'union-guildsub-view/{id}' , 'Union\GuildSubs@view' )->name('union.guildsub-view');
        Route::post('union-guildsub-view/{id}' , 'Union\GuildSubs@edit' )->name('union.guildsub-edit');
        Route::get( 'union-guildsub-del/{id}'  , 'Union\GuildSubs@del'  )->name('union.guildsub-del');

    #############################################################################################

   
###################################


});
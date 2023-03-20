<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('unions'             ,'MainController@index_union')->name('index-union');
    // ADMIN UNION 

    #############################################################################################

        Route::get( 'union'           , 'Union\Unions@index')->name('union');
        Route::post('union'           , 'Union\Unions@save' )->name('union-save');
        Route::get( 'union-show'      , 'Union\Unions@show' )->name('union-show');
        Route::get( 'union-view/{id}' , 'Union\Unions@view' )->name('union-view');
        Route::post('union-view/{id}' , 'Union\Unions@edit' )->name('union-edit');
        Route::get( 'union-del/{id}'  , 'Union\Unions@del'  )->name('union-del');

    #############################################################################################

    // ADMIN Guilds

    #############################################################################################

        Route::get( 'guild'           , 'Union\Guilds@index')->name('guild');
        Route::post('guild'           , 'Union\Guilds@save' )->name('guild-save');
        Route::get( 'guild-show'      , 'Union\Guilds@show' )->name('guild-show');
        Route::get( 'guild-view/{id}' , 'Union\Guilds@view' )->name('guild-view');
        Route::post('guild-view/{id}' , 'Union\Guilds@edit' )->name('guild-edit');
        Route::get( 'guild-del/{id}'  , 'Union\Guilds@del'  )->name('guild-del');

    #############################################################################################

    // ADMIN Activity

    #############################################################################################

        Route::get( 'acitivty'           , 'Union\Activities@index')->name('acitivty');
        Route::post('acitivty'           , 'Union\Activities@save' )->name('acitivty-save');
        Route::get( 'acitivty-show'      , 'Union\Activities@show' )->name('acitivty-show');
        Route::get( 'acitivty-view/{id}' , 'Union\Activities@view' )->name('acitivty-view');
        Route::post('acitivty-view/{id}' , 'Union\Activities@edit' )->name('acitivty-edit');
        Route::get( 'acitivty-del/{id}'  , 'Union\Activities@del'  )->name('acitivty-del');

    #############################################################################################

    // ADMIN GuildSubs

    #############################################################################################

        Route::get( 'guildsub'           , 'Union\GuildSubs@index')->name('guildsub');
        Route::post('guildsub'           , 'Union\GuildSubs@save' )->name('guildsub-save');
        Route::get( 'guildsub-show'      , 'Union\GuildSubs@show' )->name('guildsub-show');
        Route::get( 'guildsub-view/{id}' , 'Union\GuildSubs@view' )->name('guildsub-view');
        Route::post('guildsub-view/{id}' , 'Union\GuildSubs@edit' )->name('guildsub-edit');
        Route::get( 'guildsub-del/{id}'  , 'Union\GuildSubs@del'  )->name('guildsub-del');

    #############################################################################################

   
###################################


});
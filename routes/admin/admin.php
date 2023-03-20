<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

    Route::get('admins'             ,'MainController@index')->name('index-admin');

###################################

    // ADMIN UNION 

    #############################################################################################

        Route::get( 'union'           , 'Admin\Unions@index')->name('union');
        Route::post('union'           , 'Admin\Unions@save' )->name('union-save');
        Route::get( 'union-show'      , 'Admin\Unions@show' )->name('union-show');
        Route::get( 'union-view/{id}' , 'Admin\Unions@view' )->name('union-view');
        Route::post('union-view/{id}' , 'Admin\Unions@edit' )->name('union-edit');
        Route::get( 'union-del/{id}'  , 'Admin\Unions@del'  )->name('union-del');

    #############################################################################################


    // ADMIN GOV 

    #############################################################################################

        Route::get( 'gov'           , 'Admin\Gov@index')->name('gov');
        Route::post('gov'           , 'Admin\Gov@save' )->name('gov-save');
        Route::get( 'gov-show'      , 'Admin\Gov@show' )->name('gov-show');
        Route::get( 'gov-view/{id}' , 'Admin\Gov@view' )->name('gov-view');
        Route::post('gov-view/{id}' , 'Admin\Gov@edit' )->name('gov-edit');
        Route::get( 'gov-del/{id}'  , 'Admin\Gov@del'  )->name('gov-del');

    #############################################################################################

    // ADMIN GOV 

    #############################################################################################

        Route::get( 'partner'           , 'Admin\Partner@index')->name('partner');
        Route::post('partner'           , 'Admin\Partner@save' )->name('partner-save');
        Route::get( 'partner-show'      , 'Admin\Partner@show' )->name('partner-show');
        Route::get( 'partner-view/{id}' , 'Admin\Partner@view' )->name('partner-view');
        Route::post('partner-view/{id}' , 'Admin\Partner@edit' )->name('partner-edit');
        Route::get( 'partner-del/{id}'  , 'Admin\Partner@del'  )->name('partner-del');

    #############################################################################################

    // ADMIN USERS 

    #############################################################################################


        // UNION OR GUILD


        Route::get( 'users'           , 'Admin\Users@index')->name('users');
        Route::post('users'           , 'Admin\Users@save' )->name('users-save');
        Route::get( 'users-show'      , 'Admin\Users@show' )->name('users-show');
        Route::get( 'users-view/{id}' , 'Admin\Users@view' )->name('users-view');
        Route::post('users-view/{id}' , 'Admin\Users@edit' )->name('users-edit');
        Route::get( 'users-del/{id}'  , 'Admin\Users@del'  )->name('users-del');


        //POSITIONS

        Route::get( 'pos'           , 'Admin\Users@pos_index')->name('pos');
        Route::post('pos'           , 'Admin\Users@pos_save' )->name('pos-save');
        Route::get( 'pos-show'      , 'Admin\Users@pos_show' )->name('pos-show');
        Route::get( 'pos-view/{id}' , 'Admin\Users@pos_view' )->name('pos-view');
        Route::post('pos-view/{id}' , 'Admin\Users@pos_edit' )->name('pos-edit');
        Route::get( 'pos-del/{id}'  , 'Admin\Users@pos_del'  )->name('pos-del');

        // EMPLOYEE

        Route::get ('employee'           , 'Admin\Users@employee_index')->name('employee');
        Route::post('employee'           , 'Admin\Users@employee_save' )->name('employee-save');
        Route::get ('employee-show'      , 'Admin\Users@employee_show' )->name('employee-show');
        Route::get ('employee-view/{id}' , 'Admin\Users@employee_view' )->name('employee-view');
        Route::post('employee-view/{id}' , 'Admin\Users@employee_edit' )->name('employee-edit');
        Route::get ('employee-del/{id}'  , 'Admin\Users@employee_del'  )->name('employee-del');

    #############################################################################################

    // ADMIN Guilds

    #############################################################################################

        Route::get( 'guild'           , 'Admin\Guilds@index')->name('guild');
        Route::post('guild'           , 'Admin\Guilds@save' )->name('guild-save');
        Route::get( 'guild-show'      , 'Admin\Guilds@show' )->name('guild-show');
        Route::get( 'guild-view/{id}' , 'Admin\Guilds@view' )->name('guild-view');
        Route::post('guild-view/{id}' , 'Admin\Guilds@edit' )->name('guild-edit');
        Route::get( 'guild-del/{id}'  , 'Admin\Guilds@del'  )->name('guild-del');

    #############################################################################################

    // ADMIN Activity

    #############################################################################################

        Route::get( 'acitivty'           , 'Admin\Activities@index')->name('acitivty');
        Route::post('acitivty'           , 'Admin\Activities@save' )->name('acitivty-save');
        Route::get( 'acitivty-show'      , 'Admin\Activities@show' )->name('acitivty-show');
        Route::get( 'acitivty-view/{id}' , 'Admin\Activities@view' )->name('acitivty-view');
        Route::post('acitivty-view/{id}' , 'Admin\Activities@edit' )->name('acitivty-edit');
        Route::get( 'acitivty-del/{id}'  , 'Admin\Activities@del'  )->name('acitivty-del');

    #############################################################################################

    // ADMIN GuildSubs

    #############################################################################################

        Route::get( 'guildsub'           , 'Admin\GuildSubs@index')->name('guildsub');
        Route::post('guildsub'           , 'Admin\GuildSubs@save' )->name('guildsub-save');
        Route::get( 'guildsub-show'      , 'Admin\GuildSubs@show' )->name('guildsub-show');
        Route::get( 'guildsub-view/{id}' , 'Admin\GuildSubs@view' )->name('guildsub-view');
        Route::post('guildsub-view/{id}' , 'Admin\GuildSubs@edit' )->name('guildsub-edit');
        Route::get( 'guildsub-del/{id}'  , 'Admin\GuildSubs@del'  )->name('guildsub-del');

    #############################################################################################

    // ADMIN Cards

    #############################################################################################

        Route::get( 'card'           , 'Admin\Cards@index')->name('card');
        Route::post('card'           , 'Admin\Cards@save' )->name('card-save');
        Route::get( 'card-show'      , 'Admin\Cards@show' )->name('card-show');
        Route::get( 'card-view/{id}' , 'Admin\Cards@view' )->name('card-view');
        Route::post('card-view/{id}' , 'Admin\Cards@edit' )->name('card-edit');
        Route::get( 'card-del/{id}'  , 'Admin\Cards@del'  )->name('card-del');

    #############################################################################################

    // ADMIN Packages

    #############################################################################################

        Route::get( 'package'           , 'Admin\Packages@index')->name('package');
        Route::post('package'           , 'Admin\Packages@save' )->name('package-save');
        Route::get( 'package-show'      , 'Admin\Packages@show' )->name('package-show');
        Route::get( 'package-view/{id}' , 'Admin\Packages@view' )->name('package-view');
        Route::post('package-view/{id}' , 'Admin\Packages@edit' )->name('package-edit');
        Route::get( 'package-del/{id}'  , 'Admin\Packages@del'  )->name('package-del');

    #############################################################################################

    // ADMIN Customer

    #############################################################################################

        Route::get ( 'cus'                  , 'Admin\Cus@index'       )->name('cus');
        Route::get ( 'cus-org/{id}/{id2}'   , 'Admin\Cus@create_org'  )->name('cus-org');
        Route::post( 'cus-org/{id}/{id2}'   , 'Admin\Cus@save'        )->name('cus-org-save');
        Route::get ( 'cus-guild/{id}/{id2}' , 'Admin\Cus@create_guild')->name('cus-guild');
        Route::post( 'cus-guild/{id}/{id2}' , 'Admin\Cus@save'        )->name('cus-guild-save');
        
        Route::post( 'cus'                  , 'Admin\Cus@save'        )->name('cus-save');

        Route::get ( 'cus-table-show'       , 'Admin\Cus@show'        )->name('cus-table');
        Route::post( 'cus-table-show'       , 'Admin\Cus@show'        )->name('cus-table-post');
        Route::get ( 'cus-grid-show'        , 'Admin\Cus@showgrid'    )->name('cus-grid');
        Route::post( 'cus-grid-show'        , 'Admin\Cus@showgrid'    )->name('cus-grid-post');
     
        Route::get ( 'cus-view/{id}'        , 'Admin\Cus@view'        )->name('cus-view');
        Route::post( 'cus-view/{id}'        , 'Admin\Cus@edit'        )->name('cus-edit');
        
        Route::get ( 'cus-del/{id}'         , 'Admin\Cus@del'         )->name('cus-del');
        Route::get ( 'cus-del-imgs/{id}'    , 'Admin\Cus@del_imgs'    )->name('cus-del-imgs');
        Route::get ( 'cus-single/{id}'      , 'Admin\Cus@cus_single'  )->name('cus-single');

        Route::get ( 'cus-print/{id}'      , 'Admin\Cus@print'        )->name('cus-print');
        
        // Accountaing start here when the print action is taken


        Route::get ( 'cus-status-print/{id}', 'Admin\Cus@change_status_print'    )->name('cus-status-print');
        



    #############################################################################################

    // ADMIN STOCKS (GENERAL AND BLANKS)

    #############################################################################################

        //GENERAL

        Route::get ( 'stock'          , 'Admin\Stocks@index')->name('stock');
        Route::post( 'stock'          , 'Admin\Stocks@save' )->name('stock-save');
        Route::get ( 'stock-show'     , 'Admin\Stocks@show' )->name('stock-show');
        Route::get ( 'stock-view/{id}', 'Admin\Stocks@view' )->name('stock-view');
        Route::post( 'stock-view/{id}', 'Admin\Stocks@edit' )->name('stock-edit');
        Route::get ( 'stock-del/{id}' , 'Admin\Stocks@del'  )->name('stock-del');


        //BLANKS

        Route::get ( 'cardstock'          , 'Admin\CardStocks@index')->name('cardstock');
        Route::post( 'cardstock'          , 'Admin\CardStocks@save' )->name('cardstock-save');
        Route::get ( 'cardstock-show'     , 'Admin\CardStocks@show' )->name('cardstock-show');
        Route::get ( 'cardstock-view/{id}', 'Admin\CardStocks@view' )->name('cardstock-view');
        Route::post( 'cardstock-view/{id}', 'Admin\CardStocks@edit' )->name('cardstock-edit');
        Route::get ( 'cardstock-del/{id}' , 'Admin\CardStocks@del'  )->name('cardstock-del');


    #############################################################################################

    // ADMIN STOCK ITEMS 

    #############################################################################################

        Route::get( 'stockitem'           , 'Admin\StockItem@index')->name('stockitem');
        Route::post('stockitem'           , 'Admin\StockItem@save' )->name('stockitem-save');
        Route::get( 'stockitem-show'      , 'Admin\StockItem@show' )->name('stockitem-show');
        Route::get( 'stockitem-view/{id}' , 'Admin\StockItem@view' )->name('stockitem-view');
        Route::post('stockitem-view/{id}' , 'Admin\StockItem@edit' )->name('stockitem-edit');
        Route::get( 'stockitem-del/{id}'  , 'Admin\StockItem@del'  )->name('stockitem-del');

    #############################################################################################
    
    // ADMIN PUBLIC RECORD 

    #############################################################################################

        Route::get( 'record'           , 'Admin\Records@index')->name('record');
        Route::post('record'           , 'Admin\Records@save' )->name('record-save');
        Route::get( 'record-show'      , 'Admin\Records@show' )->name('record-show');
        Route::get( 'record-view/{id}' , 'Admin\Records@view' )->name('record-view');
        Route::post('record-view/{id}' , 'Admin\Records@edit' )->name('record-edit');
        Route::get( 'record-del/{id}'  , 'Admin\Records@del'  )->name('record-del');

    #############################################################################################
    

###################################


});
<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

    Route::get('admins'             ,'MainController@index')->name('index-admin');

###################################

    // ADMIN UNION 

    #############################################################################################

        Route::get( 'admin-union'           , 'Admin\Unions@index')->name('admin.union');
        Route::post('admin-union'           , 'Admin\Unions@save' )->name('admin.union-save');
        Route::get( 'admin-union-show'      , 'Admin\Unions@show' )->name('admin.union-show');
        Route::get( 'admin-union-view/{id}' , 'Admin\Unions@view' )->name('admin.union-view');
        Route::post('admin-union-view/{id}' , 'Admin\Unions@edit' )->name('admin.union-edit');
        Route::get( 'admin-union-del/{id}'  , 'Admin\Unions@del'  )->name('admin.union-del');

    #############################################################################################


    // ADMIN GOV 

    #############################################################################################

        Route::get( 'admin-gov'           , 'Admin\Gov@index')->name('admin.gov');
        Route::post('admin-gov'           , 'Admin\Gov@save' )->name('admin.gov-save');
        Route::get( 'admin-gov-show'      , 'Admin\Gov@show' )->name('admin.gov-show');
        Route::get( 'admin-gov-view/{id}' , 'Admin\Gov@view' )->name('admin.gov-view');
        Route::post('admin-gov-view/{id}' , 'Admin\Gov@edit' )->name('admin.gov-edit');
        Route::get( 'admin-gov-del/{id}'  , 'Admin\Gov@del'  )->name('admin.gov-del');

    #############################################################################################

    // ADMIN GOV 

    #############################################################################################

        Route::get( 'admin-partner'           , 'Admin\Partner@index')->name('admin.partner');
        Route::post('admin-partner'           , 'Admin\Partner@save' )->name('admin.partner-save');
        Route::get( 'admin-partner-show'      , 'Admin\Partner@show' )->name('admin.partner-show');
        Route::get( 'admin-partner-view/{id}' , 'Admin\Partner@view' )->name('admin.partner-view');
        Route::post('admin-partner-view/{id}' , 'Admin\Partner@edit' )->name('admin.partner-edit');
        Route::get( 'admin-partner-del/{id}'  , 'Admin\Partner@del'  )->name('admin.partner-del');

    #############################################################################################

    // ADMIN USERS 

    #############################################################################################


        // UNION OR GUILD


        Route::get( 'admin-users'           , 'Admin\Users@index')->name('admin.users');
        Route::post('admin-users'           , 'Admin\Users@save' )->name('admin.users-save');
        Route::get( 'admin-users-show'      , 'Admin\Users@show' )->name('admin.users-show');
        Route::get( 'admin-users-view/{id}' , 'Admin\Users@view' )->name('admin.users-view');
        Route::post('admin-users-view/{id}' , 'Admin\Users@edit' )->name('admin.users-edit');
        Route::get( 'admin-users-del/{id}'  , 'Admin\Users@del'  )->name('admin.users-del');


        //POSITIONS

        Route::get( 'admin-pos'           , 'Admin\Users@pos_index')->name('admin.pos');
        Route::post('admin-pos'           , 'Admin\Users@pos_save' )->name('admin.pos-save');
        Route::get( 'admin-pos-show'      , 'Admin\Users@pos_show' )->name('admin.pos-show');
        Route::get( 'admin-pos-view/{id}' , 'Admin\Users@pos_view' )->name('admin.pos-view');
        Route::post('admin-pos-view/{id}' , 'Admin\Users@pos_edit' )->name('admin.pos-edit');
        Route::get( 'admin-pos-del/{id}'  , 'Admin\Users@pos_del'  )->name('admin.pos-del');

        // EMPLOYEE

        Route::get ('admin-employee'           , 'Admin\Users@employee_index')->name('admin.employee');
        Route::post('admin-employee'           , 'Admin\Users@employee_save' )->name('admin.employee-save');
        Route::get ('admin-employee-show'      , 'Admin\Users@employee_show' )->name('admin.employee-show');
        Route::get ('admin-employee-view/{id}' , 'Admin\Users@employee_view' )->name('admin.employee-view');
        Route::post('admin-employee-view/{id}' , 'Admin\Users@employee_edit' )->name('admin.employee-edit');
        Route::get ('admin-employee-del/{id}'  , 'Admin\Users@employee_del'  )->name('admin.employee-del');

    #############################################################################################

    // ADMIN Guilds

    #############################################################################################

        Route::get( 'admin-guild'           , 'Admin\Guilds@index')->name('admin.guild');
        Route::post('admin-guild'           , 'Admin\Guilds@save' )->name('admin.guild-save');
        Route::get( 'admin-guild-show'      , 'Admin\Guilds@show' )->name('admin.guild-show');
        Route::get( 'admin-guild-view/{id}' , 'Admin\Guilds@view' )->name('admin.guild-view');
        Route::post('admin-guild-view/{id}' , 'Admin\Guilds@edit' )->name('admin.guild-edit');
        Route::get( 'admin-guild-del/{id}'  , 'Admin\Guilds@del'  )->name('admin.guild-del');

    #############################################################################################

    // ADMIN Activity

    #############################################################################################

        Route::get( 'admin-acitivty'           , 'Admin\Activities@index')->name('admin.acitivty');
        Route::post('admin-acitivty'           , 'Admin\Activities@save' )->name('admin.acitivty-save');
        Route::get( 'admin-acitivty-show'      , 'Admin\Activities@show' )->name('admin.acitivty-show');
        Route::get( 'admin-acitivty-view/{id}' , 'Admin\Activities@view' )->name('admin.acitivty-view');
        Route::post('admin-acitivty-view/{id}' , 'Admin\Activities@edit' )->name('admin.acitivty-edit');
        Route::get( 'admin-acitivty-del/{id}'  , 'Admin\Activities@del'  )->name('admin.acitivty-del');

    #############################################################################################

    // ADMIN GuildSubs

    #############################################################################################

        Route::get( 'admin-guildsub'           , 'Admin\GuildSubs@index')->name('admin.guildsub');
        Route::post('admin-guildsub'           , 'Admin\GuildSubs@save' )->name('admin.guildsub-save');
        Route::get( 'admin-guildsub-show'      , 'Admin\GuildSubs@show' )->name('admin.guildsub-show');
        Route::get( 'admin-guildsub-view/{id}' , 'Admin\GuildSubs@view' )->name('admin.guildsub-view');
        Route::post('admin-guildsub-view/{id}' , 'Admin\GuildSubs@edit' )->name('admin.guildsub-edit');
        Route::get( 'admin-guildsub-del/{id}'  , 'Admin\GuildSubs@del'  )->name('admin.guildsub-del');

    #############################################################################################

    // ADMIN Cards

    #############################################################################################

        Route::get( 'admin-card'           , 'Admin\Cards@index')->name('admin.card');
        Route::post('admin-card'           , 'Admin\Cards@save' )->name('admin.card-save');
        Route::get( 'admin-card-show'      , 'Admin\Cards@show' )->name('admin.card-show');
        Route::get( 'admin-card-view/{id}' , 'Admin\Cards@view' )->name('admin.card-view');
        Route::post('admin-card-view/{id}' , 'Admin\Cards@edit' )->name('admin.card-edit');
        Route::get( 'admin-card-del/{id}'  , 'Admin\Cards@del'  )->name('admin.card-del');

    #############################################################################################

    // ADMIN Packages

    #############################################################################################

        Route::get( 'admin-package'           , 'Admin\Packages@index')->name('admin.package');
        Route::post('admin-package'           , 'Admin\Packages@save' )->name('admin.package-save');
        Route::get( 'admin-package-show'      , 'Admin\Packages@show' )->name('admin.package-show');
        Route::get( 'admin-package-view/{id}' , 'Admin\Packages@view' )->name('admin.package-view');
        Route::post('admin-package-view/{id}' , 'Admin\Packages@edit' )->name('admin.package-edit');
        Route::get( 'admin-package-del/{id}'  , 'Admin\Packages@del'  )->name('admin.package-del');

    #############################################################################################

    // ADMIN Customer

    #############################################################################################

        Route::get ( 'admin-cus'                  , 'Admin\Cus@index'               )->name('admin.cus');
        Route::get ( 'admin-cus-org/{id}/{id2}'   , 'Admin\Cus@create_org'          )->name('admin.cus-org');
        Route::post( 'admin-cus-org/{id}/{id2}'   , 'Admin\Cus@save'                )->name('admin.cus-org-save');
        Route::get ( 'admin-cus-guild/{id}/{id2}' , 'Admin\Cus@create_guild'        )->name('admin.cus-guild');
        Route::post( 'admin-cus-guild/{id}/{id2}' , 'Admin\Cus@save'                )->name('admin.cus-guild-save');
        Route::post( 'admin-cus'                  , 'Admin\Cus@save'                )->name('admin.cus-save');
        Route::get ( 'admin-cus-table-show'       , 'Admin\Cus@show'                )->name('admin.cus-table');
        Route::post( 'admin-cus-table-show'       , 'Admin\Cus@show'                )->name('admin.cus-table-post');
        Route::get ( 'admin-cus-grid-show'        , 'Admin\Cus@showgrid'            )->name('admin.cus-grid');
        Route::post( 'admin-cus-grid-show'        , 'Admin\Cus@showgrid'            )->name('admin.cus-grid-post');
        Route::get ( 'admin-cus-view/{id}'        , 'Admin\Cus@view'                )->name('admin.cus-view');
        Route::post( 'admin-cus-view/{id}'        , 'Admin\Cus@edit'                )->name('admin.cus-edit');
        Route::get ( 'admin-cus-del/{id}'         , 'Admin\Cus@del'                 )->name('admin.cus-del');
        Route::get ( 'admin-cus-del-imgs/{id}'    , 'Admin\Cus@del_imgs'            )->name('admin.cus-del-imgs');
        Route::get ( 'admin-cus-single/{id}'      , 'Admin\Cus@cus_single'          )->name('admin.cus-single');
        Route::get ( 'admin-cus-print/{id}'       , 'Admin\Cus@print'               )->name('admin.cus-print');
        Route::get ( 'admin-cus-status-print/{id}', 'Admin\Cus@change_status_print' )->name('admin.cus-status-print');
    
    #############################################################################################

    // ADMIN STOCKS (GENERAL AND BLANKS)

    #############################################################################################

        //GENERAL

        Route::get ( 'admin-stock'          , 'Admin\Stocks@index')->name('admin.stock');
        Route::post( 'admin-stock'          , 'Admin\Stocks@save' )->name('admin.stock-save');
        Route::get ( 'admin-stock-show'     , 'Admin\Stocks@show' )->name('admin.stock-show');
        Route::get ( 'admin-stock-view/{id}', 'Admin\Stocks@view' )->name('admin.stock-view');
        Route::post( 'admin-stock-view/{id}', 'Admin\Stocks@edit' )->name('admin.stock-edit');
        Route::get ( 'admin-stock-del/{id}' , 'Admin\Stocks@del'  )->name('admin.stock-del');


        //BLANKS

        Route::get ( 'admin-cardstock'          , 'Admin\CardStocks@index')->name('admin.cardstock');
        Route::post( 'admin-cardstock'          , 'Admin\CardStocks@save' )->name('admin.cardstock-save');
        Route::get ( 'admin-cardstock-show'     , 'Admin\CardStocks@show' )->name('admin.cardstock-show');
        Route::get ( 'admin-cardstock-view/{id}', 'Admin\CardStocks@view' )->name('admin.cardstock-view');
        Route::post( 'admin-cardstock-view/{id}', 'Admin\CardStocks@edit' )->name('admin.cardstock-edit');
        Route::get ( 'admin-cardstock-del/{id}' , 'Admin\CardStocks@del'  )->name('admin.cardstock-del');


    #############################################################################################

    // ADMIN STOCK ITEMS 

    #############################################################################################

        Route::get( 'admin-stockitem'           , 'Admin\StockItem@index')->name('admin.stockitem');
        Route::post('admin-stockitem'           , 'Admin\StockItem@save' )->name('admin.stockitem-save');
        Route::get( 'admin-stockitem-show'      , 'Admin\StockItem@show' )->name('admin.stockitem-show');
        Route::get( 'admin-stockitem-view/{id}' , 'Admin\StockItem@view' )->name('admin.stockitem-view');
        Route::post('admin-stockitem-view/{id}' , 'Admin\StockItem@edit' )->name('admin.stockitem-edit');
        Route::get( 'admin-stockitem-del/{id}'  , 'Admin\StockItem@del'  )->name('admin.stockitem-del');

    #############################################################################################
    
    // ADMIN PUBLIC RECORD 

    #############################################################################################

        Route::get( 'admin-record'           , 'Admin\Records@index')->name('admin.record');
        Route::post('admin-record'           , 'Admin\Records@save' )->name('admin.record-save');
        Route::get( 'admin-record-show'      , 'Admin\Records@show' )->name('admin.record-show');
        Route::get( 'admin-record-view/{id}' , 'Admin\Records@view' )->name('admin.record-view');
        Route::post('admin-record-view/{id}' , 'Admin\Records@edit' )->name('admin.record-edit');
        Route::get( 'admin-record-del/{id}'  , 'Admin\Records@del'  )->name('admin.record-del');

    #############################################################################################

    

###################################


});
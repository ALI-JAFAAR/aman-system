<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('accountant'          ,'MainController@index_accountant')->name('index-accountant');

    #############################################################################################

    // ADMIN STOCKS (GENERAL AND BLANKS)

    #############################################################################################

        //GENERAL

        Route::get ( 'accountant-stock'          , 'Accountant\Stocks@index')->name('accountant.stock');
        Route::post( 'accountant-stock'          , 'Accountant\Stocks@save' )->name('accountant.stock-save');
        Route::get ( 'accountant-stock-show'     , 'Accountant\Stocks@show' )->name('accountant.stock-show');
        Route::get ( 'accountant-stock-view/{id}', 'Accountant\Stocks@view' )->name('accountant.stock-view');
        Route::post( 'accountant-stock-view/{id}', 'Accountant\Stocks@edit' )->name('accountant.stock-edit');
        Route::get ( 'accountant-stock-del/{id}' , 'Accountant\Stocks@del'  )->name('accountant.stock-del');


        //BLANKS

        Route::get ( 'accountant-cardstock'          , 'Accountant\CardStocks@index')->name('accountant.cardstock');
        Route::post( 'accountant-cardstock'          , 'Accountant\CardStocks@save' )->name('accountant.cardstock-save');
        Route::get ( 'accountant-cardstock-show'     , 'Accountant\CardStocks@show' )->name('accountant.cardstock-show');
        Route::get ( 'accountant-cardstock-view/{id}', 'Accountant\CardStocks@view' )->name('accountant.cardstock-view');
        Route::post( 'accountant-cardstock-view/{id}', 'Accountant\CardStocks@edit' )->name('accountant.cardstock-edit');
        Route::get ( 'accountant-cardstock-del/{id}' , 'Accountant\CardStocks@del'  )->name('accountant.cardstock-del');


    #############################################################################################

    // ADMIN STOCK ITEMS 

    #############################################################################################

        Route::get( 'accountant-stockitem'           , 'Accountant\StockItem@index')->name('accountant.stockitem');
        Route::post('accountant-stockitem'           , 'Accountant\StockItem@save' )->name('accountant.stockitem-save');
        Route::get( 'accountant-stockitem-show'      , 'Accountant\StockItem@show' )->name('accountant.stockitem-show');
        Route::get( 'accountant-stockitem-view/{id}' , 'Accountant\StockItem@view' )->name('accountant.stockitem-view');
        Route::post('accountant-stockitem-view/{id}' , 'Accountant\StockItem@edit' )->name('accountant.stockitem-edit');
        Route::get( 'accountant-stockitem-del/{id}'  , 'Accountant\StockItem@del'  )->name('accountant.stockitem-del');

    #############################################################################################

###################################


});
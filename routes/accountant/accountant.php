<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('accountant'          ,'MainController@index_accountant')->name('index-accountant');

    #############################################################################################

    // ADMIN STOCKS (GENERAL AND BLANKS)

    #############################################################################################

        //GENERAL

        Route::get ( 'stock'          , 'Accountant\Stocks@index')->name('stock');
        Route::post( 'stock'          , 'Accountant\Stocks@save' )->name('stock-save');
        Route::get ( 'stock-show'     , 'Accountant\Stocks@show' )->name('stock-show');
        Route::get ( 'stock-view/{id}', 'Accountant\Stocks@view' )->name('stock-view');
        Route::post( 'stock-view/{id}', 'Accountant\Stocks@edit' )->name('stock-edit');
        Route::get ( 'stock-del/{id}' , 'Accountant\Stocks@del'  )->name('stock-del');


        //BLANKS

        Route::get ( 'cardstock'          , 'Accountant\CardStocks@index')->name('cardstock');
        Route::post( 'cardstock'          , 'Accountant\CardStocks@save' )->name('cardstock-save');
        Route::get ( 'cardstock-show'     , 'Accountant\CardStocks@show' )->name('cardstock-show');
        Route::get ( 'cardstock-view/{id}', 'Accountant\CardStocks@view' )->name('cardstock-view');
        Route::post( 'cardstock-view/{id}', 'Accountant\CardStocks@edit' )->name('cardstock-edit');
        Route::get ( 'cardstock-del/{id}' , 'Accountant\CardStocks@del'  )->name('cardstock-del');


    #############################################################################################

    // ADMIN STOCK ITEMS 

    #############################################################################################

        Route::get( 'stockitem'           , 'Accountant\StockItem@index')->name('stockitem');
        Route::post('stockitem'           , 'Accountant\StockItem@save' )->name('stockitem-save');
        Route::get( 'stockitem-show'      , 'Accountant\StockItem@show' )->name('stockitem-show');
        Route::get( 'stockitem-view/{id}' , 'Accountant\StockItem@view' )->name('stockitem-view');
        Route::post('stockitem-view/{id}' , 'Accountant\StockItem@edit' )->name('stockitem-edit');
        Route::get( 'stockitem-del/{id}'  , 'Accountant\StockItem@del'  )->name('stockitem-del');

    #############################################################################################

###################################


});
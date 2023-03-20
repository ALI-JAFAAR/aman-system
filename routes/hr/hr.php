<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('hr'             ,'MainController@index_hr')->name('index-hr');
    // ADMIN USERS 

    #############################################################################################

        // UNION OR GUILD

        Route::get( 'users'              , 'hr\Users@index')->name('users');
        Route::post('users'              , 'hr\Users@save' )->name('users-save');
        Route::get( 'users-show'         , 'hr\Users@show' )->name('users-show');
        Route::get( 'users-view/{id}'    , 'hr\Users@view' )->name('users-view');
        Route::post('users-view/{id}'    , 'hr\Users@edit' )->name('users-edit');
        Route::get( 'users-del/{id}'     , 'hr\Users@del'  )->name('users-del');


        //POSITIONS

        Route::get( 'pos'                , 'hr\Users@pos_index')->name('pos');
        Route::post('pos'                , 'hr\Users@pos_save' )->name('pos-save');
        Route::get( 'pos-show'           , 'hr\Users@pos_show' )->name('pos-show');
        Route::get( 'pos-view/{id}'      , 'hr\Users@pos_view' )->name('pos-view');
        Route::post('pos-view/{id}'      , 'hr\Users@pos_edit' )->name('pos-edit');
        Route::get( 'pos-del/{id}'       , 'hr\Users@pos_del'  )->name('pos-del');

        // EMPLOYEE

        Route::get ('employee'           , 'hr\Users@employee_index')->name('employee');
        Route::post('employee'           , 'hr\Users@employee_save' )->name('employee-save');
        Route::get ('employee-show'      , 'hr\Users@employee_show' )->name('employee-show');
        Route::get ('employee-view/{id}' , 'hr\Users@employee_view' )->name('employee-view');
        Route::post('employee-view/{id}' , 'hr\Users@employee_edit' )->name('employee-edit');
        Route::get ('employee-del/{id}'  , 'hr\Users@employee_del'  )->name('employee-del');

    #############################################################################################

###################################


});
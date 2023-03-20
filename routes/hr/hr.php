<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:web'],function(){

###################################

    Route::get('hr'             ,'MainController@index_hr')->name('index-hr');
    // ADMIN USERS 

    #############################################################################################

        // UNION OR GUILD

        Route::get( 'hr-users'              , 'Hr\Users@index')->name('hr.users');
        Route::post('hr-users'              , 'Hr\Users@save' )->name('hr.users-save');
        Route::get( 'hr-users-show'         , 'Hr\Users@show' )->name('hr.users-show');
        Route::get( 'hr-users-view/{id}'    , 'Hr\Users@view' )->name('hr.users-view');
        Route::post('hr-users-view/{id}'    , 'Hr\Users@edit' )->name('hr.users-edit');
        Route::get( 'hr-users-del/{id}'     , 'Hr\Users@del'  )->name('hr.users-del');


        //POSITIONS

        Route::get( 'hr-pos'                , 'Hr\Users@pos_index')->name('hr.pos');
        Route::post('hr-pos'                , 'Hr\Users@pos_save' )->name('hr.pos-save');
        Route::get( 'hr-pos-show'           , 'Hr\Users@pos_show' )->name('hr.pos-show');
        Route::get( 'hr-pos-view/{id}'      , 'Hr\Users@pos_view' )->name('hr.pos-view');
        Route::post('hr-pos-view/{id}'      , 'Hr\Users@pos_edit' )->name('hr.pos-edit');
        Route::get( 'hr-pos-del/{id}'       , 'Hr\Users@pos_del'  )->name('hr.pos-del');

        // EMPLOYEE

        Route::get ('hr-employee'           , 'Hr\Users@employee_index')->name('hr.employee');
        Route::post('hr-employee'           , 'Hr\Users@employee_save' )->name('hr.employee-save');
        Route::get ('hr-employee-show'      , 'Hr\Users@employee_show' )->name('hr.employee-show');
        Route::get ('hr-employee-view/{id}' , 'Hr\Users@employee_view' )->name('hr.employee-view');
        Route::post('hr-employee-view/{id}' , 'Hr\Users@employee_edit' )->name('hr.employee-edit');
        Route::get ('hr-employee-del/{id}'  , 'Hr\Users@employee_del'  )->name('hr.employee-del');

    #############################################################################################

###################################


});
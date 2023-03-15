<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;







Route::get('union/{id}', 'Admin\Cus@union_api');
Route::get('guild/{id}', 'Admin\Cus@guild_api');
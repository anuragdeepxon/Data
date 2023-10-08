<?php

use SecPHP\Data\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'getAllUsers']);
Route::get('/change-password/{email}/{new_password}', [UserController::class, 'changePassword']);

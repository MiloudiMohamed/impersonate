<?php

Route::group(['middleware' => 'web'], function () {
    Route::get(
        '/admin/impersonate', 
        'Devmi\Impersonate\Http\Controllers\ImpersonateController@index')
        ->name('admin.impersonate');

    Route::post(
        '/admin/impersonate', 
        'Devmi\Impersonate\Http\Controllers\ImpersonateController@store'
    );

    Route::get(
        '/admin/impersonate/destroy', 
        'Devmi\Impersonate\Http\Controllers\ImpersonateController@destroy'
    )->name('impersonate.destroy');
    
});

<?php

Route::group(['middleware' => 'web', 'namespace' => 'JePaFe\Users\Http\Controllers'], function() {
    Route::group(['prefix' => 'admin'], function () {
        Route::name('admin')->resource('/users', 'UserController');
    });
});


<?php

Route::prefix('endpoint/ad')
    ->group(function () {
        Route::get('/', 'Api\AdController@index');
    });

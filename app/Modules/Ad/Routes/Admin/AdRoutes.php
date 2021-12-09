<?php

Route::prefix('operate/ad')
//    ->middleware(['auth'])
    ->group(function () {
        Route::name('listAd')
            ->get('/', 'Admin\AdController@index');
        Route::name('createAd')
            ->get('create', 'Admin\AdController@create');
        Route::name('storeAd')
            ->post('create', 'Admin\AdController@store');
        Route::name('editAd')
            ->get('{ad}/edit', 'Admin\AdController@edit');
        Route::name('updateAd')
            ->post('{ad}/edit', 'Admin\AdController@update');
        Route::name('deleteAd')
            ->get('{ad}/delete', 'Admin\AdController@destroy');
    });

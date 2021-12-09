<?php

Route::prefix('operate/tag')
//    ->middleware(['auth'])
    ->group(function () {
        Route::name('listTag')
            ->get('/', 'Admin\TagController@index');
        Route::name('createTag')
            ->get('create', 'Admin\TagController@create');
        Route::name('storeTag')
            ->post('create', 'Admin\TagController@store');
        Route::name('editTag')
            ->get('{tag}/edit', 'Admin\TagController@edit');
        Route::name('updateTag')
            ->post('{tag}/edit', 'Admin\TagController@update');
        Route::name('deleteTag')
            ->get('{tag}/delete', 'Admin\TagController@destroy');
    });

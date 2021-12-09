<?php

Route::prefix('operate/category')
//    ->middleware(['auth'])
    ->group(function () {
        Route::name('listCategory')
            ->get('/', 'Admin\CategoryController@index');
        Route::name('createCategory')
            ->get('create', 'Admin\CategoryController@create');
        Route::name('storeCategory')
            ->post('create', 'Admin\CategoryController@store');
        Route::name('editCategory')
            ->get('{category}/edit', 'Admin\CategoryController@edit');
        Route::name('updateCategory')
            ->post('{category}/edit', 'Admin\CategoryController@update');
        Route::name('deleteCategory')
            ->get('{category}/delete', 'Admin\CategoryController@destroy');
    });

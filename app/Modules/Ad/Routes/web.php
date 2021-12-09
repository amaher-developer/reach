<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'ad'], function () {
    Route::get('/', function () {
        dd('This is the Ad module index page. Build something great!');
    });
});


foreach (File::allFiles(__DIR__ . '/Api') as $route) {
    require_once $route->getPathname();
}

foreach (File::allFiles(__DIR__ . '/Admin') as $route) {
    require_once $route->getPathname();
}

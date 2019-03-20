<?php
/**
 * Created by PhpStorm.
 * User: lu
 * Date: 2019/3/20
 * Time: 17:01
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/abc', function () {
                return 'hdcms';
    });
});
//admin
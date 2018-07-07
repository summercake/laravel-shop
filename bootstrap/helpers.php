<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 7/7/2018
 * Time: 2:08 AM
 */
function test_helper() {
    return 'OK';
}
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
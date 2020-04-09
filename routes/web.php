<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * 添加中间键进行验证
 * ->middleware('verified')
 */
Route::get('/', 'PagesController@root')->name('root');

/**
 * 是 Laravel 的用户认证路由
 * 加上一个 verify 参数
 */
Auth::routes(['verify' => true]);


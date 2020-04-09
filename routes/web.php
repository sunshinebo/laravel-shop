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

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware'=>['auth','verified']],function (){
    //收获地址列表
    Route::get('user_addresses','UserAddressesController@index')->name('user_addresses.index');
    //新建收获地址
    Route::get('user_addresses/create','UserAddressesController@creat')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    //修改收获地址
    Route::get('user_addresses/{user_address}','UserAddressesController@edit')->name('user_addresses.edit');
    //处理修改操作
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    //删除
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
});

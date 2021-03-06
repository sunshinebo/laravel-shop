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
//商品列表访客也能访问
Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products', 'ProductsController@index')->name('products.index');
// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function () {
    //收获地址列表
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    //新建收获地址
    Route::get('user_addresses/create', 'UserAddressesController@creat')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    //修改收获地址
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    //处理修改操作
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    //删除
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
    //收藏
    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
    //取消收藏
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
    //收藏列表
    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
    //添加购物车
    Route::post('cart', 'CartController@add')->name('cart.add');
    //查看购物车
    Route::get('cart', 'CartController@index')->name('cart.index');
    //移除购物车商品
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
    //购物车下单
    Route::post('orders', 'OrdersController@store')->name('orders.store');
    //用户订单列表
    Route::get('orders', 'OrdersController@index')->name('orders.index');
    //用户订单详情
    Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
    //测试支付宝支付
    Route::get('alipay', function () {
        return app('alipay')->web([
            'out_trade_no' => time(),
            'total_amount' => '1',
            'subject'      => 'test subject - 测试',
        ]);
    });
    //订单支付
    Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
    //前端回调页面
    Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
    //微信支付
    Route::get('payment/{order}/wechat', 'PaymentController@payByWechat')->name('payment.wechat');
});
//微信服务端回调
Route::post('payment/wechat/notify', 'PaymentController@wechatNotify')->name('payment.wechat.notify');
//服务器端回调
//服务器端回调的路由不能放到带有 auth 中间件的路由组中，因为支付宝的服务器请求不会带有认证信息
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
//商品详情访客也能访问
Route::get('products/{product}', 'ProductsController@show')->name('products.show');


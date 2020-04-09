<?php
/**
 * Created by PhpStorm.
 * User: lizongyang
 * Date: 2020-04-09
 * Time: 14:21
 * 自定义辅助函数存放的地方
 */

/**
 * @return string
 */
function test_helper()
{
    return 'Ok';
}

/**
 * @return mixed
 * 此方法会将当前请求的路由名称转换为 CSS 类名称，作用是允许我们针对某个页面做页面样式定制
 */
function route_class()
{
    return str_replace('.', '-', \Illuminate\Support\Facades\Route::currentRouteName());
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//PagesController处理所有定义页面的逻辑
class PagesController extends Controller
{
    //root() 方法来处理首页的展示
    public function root()
    {
        return view('pages.root');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 商品列表
     */
    public function index(Request $request)
    {
        $products = Product::query()->where('on_sale', true)->paginate(16);
        return view('products.index', ['products' => $products]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;

class RecommendedGoodsController extends Controller
{
    public function recommendAction()
    {
        $goods = Goods::orderby('number-of-viewed', 'desc')->limit(8)->get();
        return view('recommended_goods', ['goods' => $goods, 'status' => 1]);
    }
}

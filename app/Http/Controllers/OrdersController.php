<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goods;

class OrdersController extends Controller
{
    public function buyAction($latin_url)
    {
        $product = Goods::find($latin_url);
        if ($product) {
            return view('order', ['goods_id' => $latin_url]);
        }
    }
    public function finishAction(){

    }
}

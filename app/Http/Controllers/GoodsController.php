<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function showAction($latin_url){
        $product = Goods::where('latin_url','like',$latin_url)->first();
        if($product){
            return view('product', ['good' => $product]);
        }
}
}

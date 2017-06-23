<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortingController extends Controller
{
    public function recommendAction()
    {
        $goods = Goods::orderby('number-of-viewed', 'desc')->limit(8)->get();
        $addition = [
            'manufacturer' => Manufacturer::all()
        ];
        return view('recommended_goods', ['goods' => $goods, 'addition' => $addition]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryAction($latin_url, $manufacturer_name = '%', $column = 'number-of-viewed', $type = 'desc')
    {
        $category = Category::where('latin_url', 'like', $latin_url)->first();
        if ($category) {
            $goods = Goods::where('category_id', $category->id)
                ->where('manufacturer', 'like', $manufacturer_name)
                ->orderby($column, $type)->get();
            $addition = [
                'category_url' => $latin_url,
                'status' => 1,
                'min_price' => Goods::where('category_id', $category->id)->where('manufacturer', 'like', $manufacturer_name)->min('price'),
                'max_price' => Goods::where('category_id', $category->id)->where('manufacturer', 'like', $manufacturer_name)->max('price')
            ];
            return view('goods', ['goods' => $goods, 'addition' => $addition]);
        }
    }
}

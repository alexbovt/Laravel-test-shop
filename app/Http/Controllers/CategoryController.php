<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryAction($latin_url, $sort )
    {
        $category = Category::where('latin_url', 'like', $latin_url)->first();
        if ($category) {

            switch ($sort) {
                case 'a-z':
                    $column = 'name';
                    $key_word = 'asc';
                    break;
                case 'z-a':
                    $column = 'name';
                    $key_word = 'desc';
                    break;
                case 'low-high':
                    $column = 'price';
                    $key_word = 'asc';
                    break;
                case 'high-low':
                    $column = 'price';
                    $key_word = 'desc';
                    break;
                case 'old-new':
                    $column = 'created_at';
                    $key_word = 'asc';
                    break;
                case 'new-old':
                    $column = 'created_at';
                    $key_word = 'desc';
                    break;
                case 'best-sellers':
                    $column = 'number-of-viewed';
                    $key_word = 'desc';
                    break;
                default :
                    $column = 'number-of-viewed';
                    $key_word = 'desc';
                    break;
            }
            $goods = Goods::where('category_id', $category->id)->orderby($column, $key_word)->get();
            $addition = [
                'category_url' => $latin_url,
                'status' => 1,
                'min_price' => Goods::where('category_id', $category->id)->min('price'),
                'max_price' => Goods::where('category_id', $category->id)->max('price')
            ];
            return view('goods', ['goods' => $goods, 'addition' => $addition]);
        }
    }

    public function manufacturerAction($latin_url, $manufacturer_name, $sort)
    {
        $category = Category::where('latin_url', 'like', $latin_url)->first();
        if ($category) {
            switch ($sort) {
                case 'a-z':
                    $column = 'name';
                    $key_word = 'asc';
                    break;
                case 'z-a':
                    $column = 'name';
                    $key_word = 'desc';
                    break;
                case 'low-high':
                    $column = 'price';
                    $key_word = 'asc';
                    break;
                case 'high-low':
                    $column = 'price';
                    $key_word = 'desc';
                    break;
                case 'old-new':
                    $column = 'created_at';
                    $key_word = 'asc';
                    break;
                case 'new-old':
                    $column = 'created_at';
                    $key_word = 'desc';
                    break;
                case 'best-sellers':
                    $column = 'number-of-viewed';
                    $key_word = 'desc';
                    break;
            }
            $goods = Goods::where('category_id', $category->id)
                ->where('manufacturer', 'like', $manufacturer_name)
                ->orderBy($column, $key_word)
                ->get();
            $addition = [
                'category_url' => $latin_url,
                'status' => 0,
                'manufacturer_name' => $manufacturer_name,
                'min_price' => Goods::where('category_id', $category->id)
                    ->where('manufacturer', 'like', $manufacturer_name)->min('price'),
                'max_price' => Goods::where('category_id', $category->id)
                    ->where('manufacturer', 'like', $manufacturer_name)->max('price')
            ];
            return view('goods', ['goods' => $goods, 'addition' => $addition]);
        }
    }
}

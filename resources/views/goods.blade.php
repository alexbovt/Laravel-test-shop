@extends('layouts.main')
@section('content')
    <ul class="list-group all-goods clearfix">
        @foreach($goods as $good)
            <li class="good-wrapper">
                <a href="/goods/{{$good->latin_url}}" class="good">
                    <div class="good-photo">
                        <img src="http://store.local/images/products/{{$good->category_id}}/{{$good->latin_url}}.jpg">
                    </div>
                    <span class="good-name">{{$good->name}}</span>
                    <p>
                        {{$good->description}}
                    </p>
                    <span class="price">{{$good->price}}$</span>
                    <span class="fa fa-cart-plus fa-2x" onclick="alert('Added to cart')"></span>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
@section('search-block')
    @if($addition['status']!=0)
        <ul>
            <p>Brands</p>
            @foreach($goods as $good)
                <li>
                    <a href="/categories/{{$addition['category_url']}}/{{$good->manufacturer}}">
                        {{$good->manufacturer}}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
    <p>
        <label for="amount">Price range:</label>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
    </p>
    <div id="slider-range"></div>
    Od
    <input type="number" value="{{$addition['min_price']}}"></br>
    Do
    <input type="number" value="{{$addition['max_price']}}">
@endsection
@section('parametrs')
    <ul>
        <li class="top-mes ">
            <i>{{ucfirst($addition['category_url'])}}</i>
            @if($addition['status'] == 0)
                <i> {{$addition['manufacturer_name']}}</i>
            @endif :
            <i class="count-results">{{count($goods)*2}}</i>
            results
        </li>
        <li class="sort">
            <ul class="sort-menu">
                <li class="sort-submenu"><a href="{{url()->current()}}/onumber-of-viewed/asc"></a>popular
                </li>
                <li class="sort-submenu"><a href="{{url()->current()}}/number-of-viewed/desc"></a>unpopular
                </li>
                <li class="sort-submenu"><a href="{{url()->current()}}/name/asc"></a>name a-z</li>
                <li class="sort-submenu"><a href="{{url()->current()}}/name/desc"></a>name z-a</li>
                <li class="sort-submenu"><a href="{{url()->current()}}/price/asc"></a>price low to high</li>
                <li class="sort-submenu"><a href="{{url()->current()}}/price/desc"></a>price high to low
                </li>
                <li class="sort-submenu"><a href="{{url()->current()}}/date/asc"></a>date new to old</li>
                <li class="sort-submenu"><a href="{{url()->current()}}/date/desc"></a>date old to new</li>
            </ul>
        </li>
        <li class="view-list"><a href=""><i class="fa fa-list fa-lg"></i></a></li>
        <li class="view-table"><a href=""><i class="fa fa-table fa-lg"></i></a></li>
    </ul>
@endsection
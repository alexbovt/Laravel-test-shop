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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam delectus dolores
                        doloribus
                        eligendi, fugiat iusto labore magni maiores minus nesciunt nisi nostrum odio porro
                        repellendus,
                        suscipit temporibus tenetur ut. Adipisci debitis delectus deleniti ducimus est, ipsa
                        ipsam,
                        iusto modi nam nobis officiis, quo quos tenetur totam vero voluptate voluptatem
                        voluptates?
                    </p>
                    <span class="price">{{$good->price}}$</span>
                    <span class="fa fa-cart-plus fa-2x" onclick="alert('Added to cart')"></span>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
@section('parametrs')
    <ul>
        <li class="top-mes">
            Top 8 most viewd products
        </li>
        <li class="sort">
            тут може бути ваша реклама
        </li>
        <li class="view-list"><a href=""><i class="fa fa-list fa-lg"></i></a></li>
        <li class="view-table"><a href=""><i class="fa fa-table fa-lg"></i></a></li>
    </ul>
@endsection
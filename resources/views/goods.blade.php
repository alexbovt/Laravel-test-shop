@extends('layouts.main')
@section('content')
    <ul class="list-group all-goods clearfix">
        @for($i=0;$i<2;$i++)
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
        @endfor
    </ul>
@endsection
@section('search-block')
    @if($addition['status']!=0)
        <ul>
            <p>Brands</p>
            @foreach($goods as $good)
                <li>
                    <a href="/categories/{{$addition['category_url']}}/manufacturer/{{$good->manufacturer}}/sort=best-sellers">
                        {{$good->manufacturer}}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
    <ul>
        <form action="">
            <p class="list-group">Price</p>

            <p>
                <label for="amount">Price range:</label>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </p>
            <div id="slider-range"></div>

            Od
            <input type="number" value="{{$addition['min_price']}}"></br>
            Do
            <input type="number" value="{{$addition['max_price']}}">
        </form>
    </ul>
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
        <li class="sort ">
            <ul class="sort-menu">
                @if($addition['status'] === 0)
                    <select onChange="window.location.href=this.value">
                        <option value="/categories/{{$addition['category_url']}}/manufacturer/{{$good->manufacturer}}/sort=best-sellers">
                            Bests sellers
                        </option>
                        <optgroup label="Alphabetically">
                            <option value="/categories/{{$addition['category_url']}}/manufacturer/{{$good->manufacturer}}/sort=a-z">
                                A-Z
                            </option>
                            <option value="/categories/{{$addition['category_url']}}/manufacturer/{{$good->manufacturer}}/sort=z-a">
                                Z-A
                            </option>
                        </optgroup>
                        <optgroup label="Price">
                            <option value="/categories/{{$addition['category_url']}}/manufacturer/{{$good->manufacturer}}/sort=low-high">
                                low to high
                            </option>
                            <option value="/categories/{{$addition['category_url']}}/manufacturer/{{$good->manufacturer}}/sort=high-low">
                                high to low
                            </option>
                        </optgroup>
                        <optgroup label="Date">
                            <option value="/categories/{{$addition['category_url']}}/manufacturer/{{$good->manufacturer}}/sort=old-new">
                                old to new
                            </option>
                            <option value="/categories/{{$addition['category_url']}}/manufacturer/{{$good->manufacturer}}/sort=new-old">
                                new to old
                            </option>
                        </optgroup>
                    </select>
                @else
                    <select onChange="window.location.href=this.value">
                        <option value="/categories/{{$addition['category_url']}}/sort=best-sellers"> Bests sellers
                        </option>
                        <optgroup label="Alphabetically">
                            <option value="/categories/{{$addition['category_url']}}/sort=a-z">A-Z</option>
                            <option value="/categories/{{$addition['category_url']}}/sort=z-a">Z-A</option>
                        </optgroup>
                        <optgroup label="Price">
                            <option value="/categories/{{$addition['category_url']}}/sort=low-high">low to high</option>
                            <option value="/categories/{{$addition['category_url']}}/sort=high-low">high to low</option>
                        </optgroup>
                        <optgroup label="Date">
                            <option value="/categories/{{$addition['category_url']}}/sort=old-new">old to new</option>
                            <option value="/categories/{{$addition['category_url']}}/sort=new-old">new to old</option>
                        </optgroup>
                    </select>
                @endif
            </ul>
        </li>
        <li class="view-list"><a href=""><i class="fa fa-list fa-lg"></i></a></li>
        <li class="view-table"><a href=""><i class="fa fa-table fa-lg"></i></a></li>
    </ul>
@endsection
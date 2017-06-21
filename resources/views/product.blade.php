@extends('layouts.main')
@section('content')
    <ul class="list-group selected-product clearfix">
        <li>
            <div class="product-photo">
                <img src="http://store.local/images/products/{{$good->category_id}}/{{$good->latin_url}}.jpg">
            </div>
        </li>
        <li>
            <p>
                {{$good -> name}}
            </p>
        </li>
        <li>
            <p>
                {{$good -> description}}
            </p>
        </li>
        <li>
            <p>
                $ {{$good -> price}}
            </p>
        </li>
        <li>
            <form action="/order/{{$good->id}}">
                <button type="submit" class="btn btn-success">Add to cart</button>
            </form>
        </li>
    </ul>
@endsection
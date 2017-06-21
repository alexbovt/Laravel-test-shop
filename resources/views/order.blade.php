@extends('layouts.main')
@section('content')
    <form method="POST" action="/order_final/"  >
        <div class="form-group">
            <label for="customer_name">Name</label>
            <input type="text" name="customer_name" id="customer_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="form-control">
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="comment">Comment</textarea>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control">
        </div>
        <input type="hidden" value="{{$goods_id}}" name="product_id">
        <button type="submit" class="btn btn-success">Buy</button>
    </form>
@endsection
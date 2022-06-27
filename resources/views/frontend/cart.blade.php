@extends('layouts.front')
@section('title')
My Cart
@endsection
@section('content')
<div class="py-3 mb-4 shadow-sm  border-top ">
    <div class="container">
        <h6 class="mb-0"> <a href="{{ url('/') }}">Home</a> / <a href="{{ url('/cart') }}">Cart</a></h6>
    </div>
</div>







<div class="container my-5">
    <div class="card shadow ">
        <div class="card-body">
            @php
            $total = 0
            @endphp
            @foreach ($cartitems as $item )
            <div class="row product_data">
                <div class="col-md-2">
                    <img src="{{ asset('assets/uploads/product/'.$item->prods->image) }}" height="70px" width="100px"
                        alt="">
                </div>
                <div class="col-md-4 mt-4">
                    <h6>{{ $item->prods->name }}</h6>
                </div>
                <div class="col-md-2 my-auto">
                    <h6> EGP{{ $item->prods->selling_price }}</h6>
                </div>
                <div class="col-md-2">
                    <input type="hidden" value="{{ $item->prod_id }}" class="prod_id">
                    <label for="Quantity">Quantity</label>
                    <div class="input-group text-center mb-3">
                        <button class="input-group-text changeqty btn-decrement">-</button>
                        <input type="text" name="Quantity" value="{{ $item->prod_qty }}"
                            class="form-control text-center qty-input" />
                        <button class="input-group-text changeqty btn-increment">+</button>
                    </div>
                </div>
                <div class="col-sm-2 float-end mt-4">
                    <button class="btn btn-danger delete-cart float-start"> <i class="fa fa-trash"></i> Remove</button>
                </div>
            </div>
            @php
            $total += $item->prods->selling_price * $item->prod_qty
            @endphp
            @endforeach
        </div>
        <div class="card-footer">
            <h6> totale price : {{ $total }} EGP </h6>
            <a href="{{ url('checkout') }}" class="btn btn-outline-success  float-start"> checkout</a>
        </div>
    </div>
</div>



@endsection
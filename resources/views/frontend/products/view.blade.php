@extends('layouts.front')


@section('title' , $product->name)


@section('content')
<div class="py-3 mb-4 shadow-sm  border-top ">
    <div class="container">
        <h6 class="mb-0"> collections / {{ $product->category->name }} / {{ $product->name }}</h6>
    </div>
</div>









<div class="container">
    <div class="shadow">
        <div class="card-body product_data">
            <div class="row">

                <div class="col-md-4 border-right">
                    <img src="{{ asset('assets/uploads/product/'.$product->image) }}" style="height: 20vh"
                        alt="product image">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{ $product->name }}
                        @if ( $product->trending == '1')


                        <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag">Trending </label>
                        @endif
                    </h2>
                    <hr>
                    <label class="me-3"> Original price : <s> EGP{{ $product->original_price }}</s></label>
                    <label class="fw-bold"> Sall Price : EGP {{ $product->selling_price }}</label>
                    <p class="mt-3">
                        {!! $product->small_description !!}
                    </p>
                    <hr>
                    @if ($product->qty > 0)
                    <label class="badge bg-success "> in stock</label>
                    @else
                    <label class="badge bg-danger"> in stock</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input type="hidden" value="{{ $product->id }}" class="prod_id">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3">
                                <button class="input-group-text btn-decrement">-</button>
                                <input type="text" name="Quantity" value="1"
                                    class="form-control text-center qty-input" />
                                <button class="input-group-text btn-increment">+</button>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <button class="btn btn-success me-3 float-start">Add to wishlist <i
                                    class="fa fa-heart"></i></button>
                            <button class="btn btn-primary me-3 addcart float-start">Add to cart <i
                                    class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <h3>Description</h3>
                <p class="mt-3">
                    {!! $product->description !!}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

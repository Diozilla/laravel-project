@extends('layouts.front')
@section('title')
checkout
@endsection
@section('content')
<div class="py-3 mb-4 shadow-sm  border-top ">
    <div class="container">
        <h6 class="mb-0"> <a href="{{ url('/') }}">Home</a> / <a href="{{ url('/checkout') }}">checkout</a></h6>
    </div>
</div>





<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6>basic details</h6>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="">First name</label>
                            <input type="text" class="form-control" placeholder="enter first name" name="" >
                        </div>
                        <div class="col-md-6">
                            <label for="">Last name</label>
                            <input type="text" class="form-control" placeholder="enter Last name" name="" >
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control" placeholder="enter Email" name="" >
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" placeholder="enter Phone Number" name="" >
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Address 1</label>
                            <input type="text" class="form-control" placeholder="enter Address" name="" >
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Address 2</label>
                            <input type="text" class="form-control" placeholder="enter Address" name="" >
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">City</label>
                            <input type="text" class="form-control" placeholder="City" name="" >
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">State</label>
                            <input type="text" class="form-control" placeholder="state" name="" >
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">pin code</label>
                            <input type="text" class="form-control" placeholder="pin code" name="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h6>other details</h6>
                    <hr>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>QTY</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartitems as $item)
                            <tr>
                                <td>{{ $item->prods->name }}</td>
                                <td>{{ $item->prod_qty }}</td>
                                <td>{{ $item->prods->selling_price }}</td>

                                
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                    <button class="btn btn-primary float-end w-100">Place order</button>
                        
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
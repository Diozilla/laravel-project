@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add product</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select" >
                        <option value="">select a category</option>
                    
                        <option value="">{{ $product->category->name }}</option>
                       
                      </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="from-control" value="{{ $product->name }}" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="from-control" value="{{ $product->slug }}" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <textarea name="small_description" rows="3" class="form-control">{{ $product->small_description }}</textarea>

                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control">{{ $product->description }}</textarea>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original price</label>
                    <input type="number" class="from-control" value="{{ $product->original_price }}" name="original_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Selling price</label>
                    <input type="number" class="from-control" value="{{ $product->selling_price }}" name="selling_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" class="from-control" value="{{ $product->tax }}" name="tax">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="from-control" value="{{ $product->qty }}" name="qty">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" {{ $product->status == "1" ? 'checked':'' }} class="from-control"  name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">trending</label>
                    <input type="checkbox" {{ $product->trending == "1" ? 'checked':'' }} class="from-control" name="trending">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta title</label>
                    <input type="text" class="from-control" value="{{ $product->meta_title }}" name="meta_title">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control">{{ $product->meta_keywords }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{{ $product->meta_description }}</textarea>
                </div>
                @if ($product->image)
                <img src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="product-image">
            @endif
                <div class="col-md-12">
                 <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="submit">update</button>
                </div>
            </div>
            @csrf
        </form>
    </div>
</div>



























@endsection
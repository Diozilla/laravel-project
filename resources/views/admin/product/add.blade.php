@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add product</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select" name="cat_id">
                        <option value="">select a category</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="from-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="from-control" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <textarea name="small_description" rows="3" class="form-control"></textarea>

                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control"></textarea>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original price</label>
                    <input type="number" class="from-control" name="original_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Selling price</label>
                    <input type="number" class="from-control" name="selling_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" class="from-control" name="tax">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="from-control" name="qty">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" class="from-control" name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">trending</label>
                    <input type="checkbox" class="from-control" name="trending">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta title</label>
                    <input type="text" class="from-control" name="meta_title">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta description</label>
                    <textarea name="meta_description" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12">
                 <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="submit">submit</button>
                </div>
            </div>
            @csrf
        </form>
    </div>
</div>



























@endsection
@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit or Update Category</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-category/'. $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" value="{{ $category->name }}" class="from-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" value="{{ $category->slug }}" class="from-control" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control">{{ $category->description }} </textarea>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"{{ $category->status == "1" ? 'checked':'' }} class="from-control" name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" {{ $category->popular == "1" ? 'checked':'' }} class="from-control" name="popular">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta title</label>
                    <input type="text" value="{{ $category->meta_title }}" class="from-control" name="meta_title">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta description</label>
                    <textarea name="meta_description"  rows="3" class="form-control">{{ $category->meta_description }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta keywords</label>
                    <textarea name="meta_keywords"  rows="3" class="form-control">{{ $category->meta_keywords }}</textarea>
                </div>
                @if ($category->image)
                    <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="cat-image">
                @endif
                <div class="col-md-12">
                 <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="submit">submit</button>
                </div>
            </div>
            
        </form>
    </div>
</div>



























@endsection